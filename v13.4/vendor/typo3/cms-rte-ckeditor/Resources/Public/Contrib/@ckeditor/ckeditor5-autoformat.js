import{Plugin as C}from"@ckeditor/ckeditor5-core";import{Delete as E}from"@ckeditor/ckeditor5-typing";import{LiveRange as y}from"@ckeditor/ckeditor5-engine";import{first as B}from"@ckeditor/ckeditor5-utils";/**
* @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
* For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-licensing-options
*/function g(o,t,e,n){let c,i=null;typeof n=="function"?c=n:(i=o.commands.get(n),c=()=>{o.execute(n)}),o.model.document.on("change:data",(k,d)=>{if(i&&!i.isEnabled||!t.isEnabled)return;const r=B(o.model.document.selection.getRanges());if(!r.isCollapsed||d.isUndo||!d.isLocal)return;const h=Array.from(o.model.document.differ.getChanges()),a=h[0];if(h.length!=1||a.type!=="insert"||a.name!="$text"||a.length!=1)return;const s=a.position.parent;if(s.is("element","codeBlock")||s.is("element","listItem")&&typeof n!="function"&&!["numberedList","bulletedList","todoList"].includes(n)||i&&i.value===!0)return;const l=s.getChild(0),f=o.model.createRangeOn(l);if(!f.containsRange(r)&&!r.end.isEqual(f.end))return;const m=e.exec(l.data.substr(0,r.end.offset));m&&o.model.enqueueChange(u=>{const A=u.createPositionAt(s,0),x=u.createPositionAt(s,m[0].length),b=new y(A,x);if(c({match:m})!==!1){u.remove(b);const _=o.model.document.selection.getFirstRange(),L=u.createRangeIn(s);s.isEmpty&&!L.isEqual(_)&&!L.containsRange(_,!0)&&u.remove(s)}b.detach(),o.model.enqueueChange(()=>{o.plugins.get("Delete").requestUndoOnBackspace()})})})}/**
* @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
* For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-licensing-options
*/function p(o,t,e,n){let c,i;e instanceof RegExp?c=e:i=e,i=i||(k=>{let d;const r=[],h=[];for(;(d=c.exec(k))!==null&&!(d&&d.length<4);){let{index:a,"1":s,"2":l,"3":f}=d;const m=s+l+f;a+=d[0].length-m.length;const u=[a,a+s.length],A=[a+s.length+l.length,a+s.length+l.length+f.length];r.push(u),r.push(A),h.push([a+s.length,a+s.length+l.length])}return{remove:r,format:h}}),o.model.document.on("change:data",(k,d)=>{if(d.isUndo||!d.isLocal||!t.isEnabled)return;const r=o.model,h=r.document.selection;if(!h.isCollapsed)return;const a=Array.from(r.document.differ.getChanges()),s=a[0];if(a.length!=1||s.type!=="insert"||s.name!="$text"||s.length!=1)return;const l=h.focus,f=l.parent,{text:m,range:u}=P(r.createRange(r.createPositionAt(f,0),l),r),A=i(m),x=R(u.start,A.format,r),b=R(u.start,A.remove,r);x.length&&b.length&&r.enqueueChange(v=>{if(n(v,x)!==!1){for(const L of b.reverse())v.remove(L);r.enqueueChange(()=>{o.plugins.get("Delete").requestUndoOnBackspace()})}})})}function R(o,t,e){return t.filter(n=>n[0]!==void 0&&n[1]!==void 0).map(n=>e.createRange(o.getShiftedBy(n[0]),o.getShiftedBy(n[1])))}function P(o,t){let e=o.start;return{text:Array.from(o.getItems()).reduce((c,i)=>!(i.is("$text")||i.is("$textProxy"))||i.getAttribute("code")?(e=t.createPositionAfter(i),""):c+i.data,""),range:t.createRange(e,o.end)}}/**
* @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
* For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-licensing-options
*/class q extends C{static get requires(){return[E]}static get pluginName(){return"Autoformat"}static get isOfficialPlugin(){return!0}afterInit(){const t=this.editor,e=this.editor.t;this._addListAutoformats(),this._addBasicStylesAutoformats(),this._addHeadingAutoformats(),this._addBlockQuoteAutoformats(),this._addCodeBlockAutoformats(),this._addHorizontalLineAutoformats(),t.accessibility.addKeystrokeInfos({keystrokes:[{label:e("Revert autoformatting action"),keystroke:"Backspace"}]})}_addListAutoformats(){const t=this.editor.commands;t.get("bulletedList")&&g(this.editor,this,/^[*-]\s$/,"bulletedList"),t.get("numberedList")&&g(this.editor,this,/^1[.|)]\s$/,"numberedList"),t.get("todoList")&&g(this.editor,this,/^\[\s?\]\s$/,"todoList"),t.get("checkTodoList")&&g(this.editor,this,/^\[\s?x\s?\]\s$/,()=>{this.editor.execute("todoList"),this.editor.execute("checkTodoList")})}_addBasicStylesAutoformats(){const t=this.editor.commands;if(t.get("bold")){const e=$(this.editor,"bold");p(this.editor,this,/(?:^|\s)(\*\*)([^*]+)(\*\*)$/g,e),p(this.editor,this,/(?:^|\s)(__)([^_]+)(__)$/g,e)}if(t.get("italic")){const e=$(this.editor,"italic");p(this.editor,this,/(?:^|\s)(\*)([^*_]+)(\*)$/g,e),p(this.editor,this,/(?:^|\s)(_)([^_]+)(_)$/g,e)}if(t.get("code")){const e=$(this.editor,"code");p(this.editor,this,/(`)([^`]+)(`)$/g,e)}if(t.get("strikethrough")){const e=$(this.editor,"strikethrough");p(this.editor,this,/(~~)([^~]+)(~~)$/g,e)}}_addHeadingAutoformats(){const t=this.editor.commands.get("heading");t&&t.modelElements.filter(e=>e.match(/^heading[1-6]$/)).forEach(e=>{const n=e[7],c=new RegExp(`^(#{${n}})\\s$`);g(this.editor,this,c,()=>{if(!t.isEnabled||t.value===e)return!1;this.editor.execute("heading",{value:e})})})}_addBlockQuoteAutoformats(){this.editor.commands.get("blockQuote")&&g(this.editor,this,/^>\s$/,"blockQuote")}_addCodeBlockAutoformats(){const t=this.editor,e=t.model.document.selection;t.commands.get("codeBlock")&&g(t,this,/^```$/,()=>{if(e.getFirstPosition().parent.is("element","listItem"))return!1;this.editor.execute("codeBlock",{usePreviousLanguageChoice:!0})})}_addHorizontalLineAutoformats(){this.editor.commands.get("horizontalLine")&&g(this.editor,this,/^---$/,"horizontalLine")}}function $(o,t){return(e,n)=>{if(!o.commands.get(t).isEnabled)return!1;const i=o.model.schema.getValidRanges(n,t);for(const k of i)e.setAttribute(t,!0,k);e.removeSelectionAttribute(t)}}export{q as Autoformat,g as blockAutoformatEditing,p as inlineAutoformatEditing};
