/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import{html as s,LitElement as m,nothing as f}from"lit";import{customElement as h,property as g,query as P}from"lit/decorators.js";import{until as y}from"lit/directives/until.js";import{lll as b}from"@typo3/core/lit-helper.js";import{PageTree as v}from"@typo3/backend/tree/page-tree.js";import p from"@typo3/core/ajax/ajax-request.js";import"@typo3/backend/tree/tree-toolbar.js";import k from"@typo3/backend/element-browser.js";import w from"@typo3/backend/link-browser.js";import"@typo3/backend/element/icon-element.js";import T from"@typo3/backend/storage/persistent.js";var l=function(r,e,t,n){var o=arguments.length,i=o<3?e:n===null?n=Object.getOwnPropertyDescriptor(e,t):n,c;if(typeof Reflect=="object"&&typeof Reflect.decorate=="function")i=Reflect.decorate(r,e,t,n);else for(var d=r.length-1;d>=0;d--)(c=r[d])&&(i=(o<3?c(i):o>3?c(e,t,i):c(e,t))||i);return o>3&&i&&Object.defineProperty(e,t,i),i};let u=class extends v{getNodeClasses(e){const t=super.getNodeClasses(e);return this.settings.actions.includes("link")&&(this.isLinkable(e)||t.push("node-disabled")),t}createNodeContentAction(e){return this.settings.actions.includes("link")?this.isLinkable(e)?s`<span class=node-action @click=${()=>this.linkItem(e)}> <typo3-backend-icon identifier=actions-link size=small></typo3-backend-icon> </span>`:super.createNodeContentAction(e):this.settings.actions.includes("select")?s`<span class=node-action @click=${()=>this.selectItem(e)}> <typo3-backend-icon identifier=actions-link size=small></typo3-backend-icon> </span>`:super.createNodeContentAction(e)}linkItem(e){w.finalizeFunction("t3://page?uid="+e.identifier)}isLinkable(e){return["199","254","255"].includes(String(e.recordType))===!1}selectItem(e){k.insertElement(e.recordType,e.identifier,e.name,"",!0)}};u=l([h("typo3-backend-component-page-browser-tree")],u);let a=class extends m{constructor(){super(...arguments),this.mountPointPath=null,this.activePageId=0,this.actions=[],this.configuration=null,this.selectActivePageInTree=e=>{const t=e.detail.nodes;e.detail.nodes=t.map(n=>(parseInt(n.identifier,10)===this.activePageId&&(n.checked=!0),n))},this.loadRecordsOfPage=e=>{const t=e.detail.node;if(!t.checked)return;const n=new URL(document.location.href,window.location.origin);n.searchParams.set("contentOnly","1"),n.searchParams.set("expandPage",t.identifier),new p(n).get().then(o=>o.resolve()).then(o=>{const i=document.querySelector(".element-browser-main-content .element-browser-body");i.innerHTML=o})},this.setMountPoint=e=>{this.setTemporaryMountPoint(e.detail.pageId)}}connectedCallback(){super.connectedCallback(),document.addEventListener("typo3:pagetree:mountPoint",this.setMountPoint)}disconnectedCallback(){document.removeEventListener("typo3:pagetree:mountPoint",this.setMountPoint),super.disconnectedCallback()}firstUpdated(){this.activePageId=parseInt(this.getAttribute("active-page"),10),this.actions=JSON.parse(this.getAttribute("tree-actions")??"[]")}createRenderRoot(){return this}getConfiguration(){if(this.configuration!==null)return Promise.resolve(this.configuration);const e=top.TYPO3.settings.ajaxUrls.page_tree_browser_configuration,t=this.hasAttribute("alternative-entry-points")?JSON.parse(this.getAttribute("alternative-entry-points")):[];let n=new p(e);return t.length&&(n=n.withQueryArguments("alternativeEntryPoints="+encodeURIComponent(t))),n.get().then(async o=>{const i=await o.resolve("json");return i.actions=this.actions,this.configuration=i,this.mountPointPath=i.temporaryMountPoint||null,i})}render(){return s`<div class=tree>${y(this.renderTree(),"")}</div>`}renderTree(){return this.getConfiguration().then(e=>{const t=()=>{this.tree.addEventListener("typo3:tree:node-selected",this.loadRecordsOfPage),this.tree.addEventListener("typo3:tree:nodes-prepared",this.selectActivePageInTree);const n=this.querySelector("typo3-backend-tree-toolbar");n.tree=this.tree};return s`<typo3-backend-tree-toolbar .tree=${this.tree}></typo3-backend-tree-toolbar><div class=navigation-tree-container>${this.renderMountPoint()}<typo3-backend-component-page-browser-tree id=typo3-pagetree-tree class=tree-wrapper .setup=${e} @tree:initialized=${t}></typo3-backend-component-page-browser-tree></div>`})}unsetTemporaryMountPoint(){T.unset("pageTree_temporaryMountPoint").then(()=>{this.mountPointPath=null})}renderMountPoint(){return this.mountPointPath===null?f:s`<div class=node-mount-point><div class=node-mount-point__icon><typo3-backend-icon identifier=actions-info-circle size=small></typo3-backend-icon></div><div class=node-mount-point__text>${this.mountPointPath}</div><div class="node-mount-point__icon mountpoint-close" @click=${()=>this.unsetTemporaryMountPoint()} title=${b("labels.temporaryDBmount")}><typo3-backend-icon identifier=actions-close size=small></typo3-backend-icon></div></div>`}setTemporaryMountPoint(e){new p(this.configuration.setTemporaryMountPointUrl).post("pid="+e,{headers:{"Content-Type":"application/x-www-form-urlencoded","X-Requested-With":"XMLHttpRequest"}}).then(t=>t.resolve()).then(t=>{t&&t.hasErrors?(this.tree.errorNotification(t.message),this.tree.loadData()):this.mountPointPath=t.mountPointPath}).catch(t=>{this.tree.errorNotification(t),this.tree.loadData()})}};l([g({type:String})],a.prototype,"mountPointPath",void 0),l([P(".tree-wrapper")],a.prototype,"tree",void 0),a=l([h("typo3-backend-component-page-browser")],a);export{a as PageBrowser,u as PageBrowserTree};
