"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[680],{4129:function(u,o,l){var a,g,h,p=l(7294),v=(h=p)&&"object"==typeof h&&"default"in h?h.default:h,w=function(){return(w=Object.assign||function(d){for(var a,b=1,e=arguments.length;b<e;b++)for(var c in a=arguments[b])Object.prototype.hasOwnProperty.call(a,c)&&(d[c]=a[c]);return d}).apply(this,arguments)},x="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof window?window:void 0!==l.g?l.g:"undefined"!=typeof self?self:{};function c(a){return a&&a.__esModule&&Object.prototype.hasOwnProperty.call(a,"default")?a.default:a}function d(b,a){return b(a={exports:{}},a.exports),a.exports}var m=d(function(c,b){var a;Object.defineProperty(b,"__esModule",{value:!0}),b.BLOCKS=void 0,(a=b.BLOCKS||(b.BLOCKS={})).DOCUMENT="document",a.PARAGRAPH="paragraph",a.HEADING_1="heading-1",a.HEADING_2="heading-2",a.HEADING_3="heading-3",a.HEADING_4="heading-4",a.HEADING_5="heading-5",a.HEADING_6="heading-6",a.OL_LIST="ordered-list",a.UL_LIST="unordered-list",a.LIST_ITEM="list-item",a.HR="hr",a.QUOTE="blockquote",a.EMBEDDED_ENTRY="embedded-entry-block",a.EMBEDDED_ASSET="embedded-asset-block",a.TABLE="table",a.TABLE_ROW="table-row",a.TABLE_CELL="table-cell",a.TABLE_HEADER_CELL="table-header-cell"});c(m),m.BLOCKS;var n=d(function(c,a){var b;Object.defineProperty(a,"__esModule",{value:!0}),a.INLINES=void 0,(b=a.INLINES||(a.INLINES={})).HYPERLINK="hyperlink",b.ENTRY_HYPERLINK="entry-hyperlink",b.ASSET_HYPERLINK="asset-hyperlink",b.EMBEDDED_ENTRY="embedded-entry-inline"});c(n),n.INLINES;var q=d(function(d,c){var b,a;Object.defineProperty(c,"__esModule",{value:!0}),(a=b||(b={})).BOLD="bold",a.ITALIC="italic",a.UNDERLINE="underline",a.CODE="code",c.default=b});c(q);var e=d(function(d,a){var b,c=x&&x.__spreadArray||function(d,b,e){if(e||2===arguments.length)for(var c,a=0,f=b.length;a<f;a++)!c&&a in b||(c||(c=Array.prototype.slice.call(b,0,a)),c[a]=b[a]);return d.concat(c||Array.prototype.slice.call(b))};Object.defineProperty(a,"__esModule",{value:!0}),a.V1_NODE_TYPES=a.TEXT_CONTAINERS=a.HEADINGS=a.CONTAINERS=a.VOID_BLOCKS=a.TABLE_BLOCKS=a.LIST_ITEM_BLOCKS=a.TOP_LEVEL_BLOCKS=void 0,a.TOP_LEVEL_BLOCKS=[m.BLOCKS.PARAGRAPH,m.BLOCKS.HEADING_1,m.BLOCKS.HEADING_2,m.BLOCKS.HEADING_3,m.BLOCKS.HEADING_4,m.BLOCKS.HEADING_5,m.BLOCKS.HEADING_6,m.BLOCKS.OL_LIST,m.BLOCKS.UL_LIST,m.BLOCKS.HR,m.BLOCKS.QUOTE,m.BLOCKS.EMBEDDED_ENTRY,m.BLOCKS.EMBEDDED_ASSET,m.BLOCKS.TABLE,],a.LIST_ITEM_BLOCKS=[m.BLOCKS.PARAGRAPH,m.BLOCKS.HEADING_1,m.BLOCKS.HEADING_2,m.BLOCKS.HEADING_3,m.BLOCKS.HEADING_4,m.BLOCKS.HEADING_5,m.BLOCKS.HEADING_6,m.BLOCKS.OL_LIST,m.BLOCKS.UL_LIST,m.BLOCKS.HR,m.BLOCKS.QUOTE,m.BLOCKS.EMBEDDED_ENTRY,m.BLOCKS.EMBEDDED_ASSET,],a.TABLE_BLOCKS=[m.BLOCKS.TABLE,m.BLOCKS.TABLE_ROW,m.BLOCKS.TABLE_CELL,m.BLOCKS.TABLE_HEADER_CELL,],a.VOID_BLOCKS=[m.BLOCKS.HR,m.BLOCKS.EMBEDDED_ENTRY,m.BLOCKS.EMBEDDED_ASSET],a.CONTAINERS=((b={})[m.BLOCKS.OL_LIST]=[m.BLOCKS.LIST_ITEM],b[m.BLOCKS.UL_LIST]=[m.BLOCKS.LIST_ITEM],b[m.BLOCKS.LIST_ITEM]=a.LIST_ITEM_BLOCKS,b[m.BLOCKS.QUOTE]=[m.BLOCKS.PARAGRAPH],b[m.BLOCKS.TABLE]=[m.BLOCKS.TABLE_ROW],b[m.BLOCKS.TABLE_ROW]=[m.BLOCKS.TABLE_CELL,m.BLOCKS.TABLE_HEADER_CELL],b[m.BLOCKS.TABLE_CELL]=[m.BLOCKS.PARAGRAPH],b[m.BLOCKS.TABLE_HEADER_CELL]=[m.BLOCKS.PARAGRAPH],b),a.HEADINGS=[m.BLOCKS.HEADING_1,m.BLOCKS.HEADING_2,m.BLOCKS.HEADING_3,m.BLOCKS.HEADING_4,m.BLOCKS.HEADING_5,m.BLOCKS.HEADING_6,],a.TEXT_CONTAINERS=c([m.BLOCKS.PARAGRAPH],a.HEADINGS,!0),a.V1_NODE_TYPES=[m.BLOCKS.DOCUMENT,m.BLOCKS.PARAGRAPH,m.BLOCKS.HEADING_1,m.BLOCKS.HEADING_2,m.BLOCKS.HEADING_3,m.BLOCKS.HEADING_4,m.BLOCKS.HEADING_5,m.BLOCKS.HEADING_6,m.BLOCKS.OL_LIST,m.BLOCKS.UL_LIST,m.BLOCKS.LIST_ITEM,m.BLOCKS.HR,m.BLOCKS.QUOTE,m.BLOCKS.EMBEDDED_ENTRY,m.BLOCKS.EMBEDDED_ASSET,n.INLINES.HYPERLINK,n.INLINES.ENTRY_HYPERLINK,n.INLINES.ASSET_HYPERLINK,n.INLINES.EMBEDDED_ENTRY,"text",]});c(e),e.V1_NODE_TYPES,e.TEXT_CONTAINERS,e.HEADINGS,e.CONTAINERS,e.VOID_BLOCKS,e.TABLE_BLOCKS,e.LIST_ITEM_BLOCKS,e.TOP_LEVEL_BLOCKS;var r=d(function(b,a){Object.defineProperty(a,"__esModule",{value:!0})});c(r);var s=d(function(b,a){Object.defineProperty(a,"__esModule",{value:!0})});c(s);var t=d(function(c,a){Object.defineProperty(a,"__esModule",{value:!0});var b={nodeType:m.BLOCKS.DOCUMENT,data:{},content:[{nodeType:m.BLOCKS.PARAGRAPH,data:{},content:[{nodeType:"text",value:"",marks:[],data:{}},]},]};a.default=b});c(t);var i=d(function(b,a){function c(b,d){for(var a=0,c=Object.keys(b);a<c.length;a++)if(d===b[c[a]])return!0;return!1}Object.defineProperty(a,"__esModule",{value:!0}),a.isText=a.isBlock=a.isInline=void 0,a.isInline=function(a){return c(n.INLINES,a.nodeType)},a.isBlock=function(a){return c(m.BLOCKS,a.nodeType)},a.isText=function(a){return"text"===a.nodeType}});c(i),i.isText,i.isBlock,i.isInline;var f=d(function(f,a){var g=x&&x.__createBinding||(Object.create?function(e,c,d,b){void 0===b&&(b=d);var a=Object.getOwnPropertyDescriptor(c,d);(!a||("get"in a?!c.__esModule:a.writable||a.configurable))&&(a={enumerable:!0,get:function(){return c[d]}}),Object.defineProperty(e,b,a)}:function(c,d,b,a){void 0===a&&(a=b),c[a]=d[b]}),h=x&&x.__setModuleDefault||(Object.create?function(a,b){Object.defineProperty(a,"default",{enumerable:!0,value:b})}:function(a,b){a.default=b}),b=x&&x.__exportStar||function(b,c){for(var a in b)"default"===a||Object.prototype.hasOwnProperty.call(c,a)||g(c,b,a)},c=x&&x.__importStar||function(a){if(a&&a.__esModule)return a;var b={};if(null!=a)for(var c in a)"default"!==c&&Object.prototype.hasOwnProperty.call(a,c)&&g(b,a,c);return h(b,a),b},j=x&&x.__importDefault||function(a){return a&&a.__esModule?a:{"default":a}};Object.defineProperty(a,"__esModule",{value:!0}),a.helpers=a.EMPTY_DOCUMENT=a.MARKS=a.INLINES=a.BLOCKS=void 0,Object.defineProperty(a,"BLOCKS",{enumerable:!0,get:function(){return m.BLOCKS}}),Object.defineProperty(a,"INLINES",{enumerable:!0,get:function(){return n.INLINES}}),Object.defineProperty(a,"MARKS",{enumerable:!0,get:function(){return j(q).default}}),b(e,a),b(r,a),b(s,a),Object.defineProperty(a,"EMPTY_DOCUMENT",{enumerable:!0,get:function(){return j(t).default}});var d=c(i);a.helpers=d});c(f);var y=f.helpers;f.EMPTY_DOCUMENT;var j=f.MARKS,k=f.INLINES,b=f.BLOCKS;function z(a,b){var c=b.renderNode,h=b.renderMark,d=b.renderText;if(y.isText(a))return a.marks.reduce(function(a,b){return h[b.type]?h[b.type](a):a},d?d(a.value):a.value);var e,g,f=(e=a.content,g=b,e.map(function(c,d){var a,b;return a=z(c,g),b=d,p.isValidElement(a)&&null===a.key?p.cloneElement(a,{key:b}):a}));return a.nodeType&&c[a.nodeType]?c[a.nodeType](a,f):v.createElement(v.Fragment,null,f)}var A=((a={})[b.DOCUMENT]=function(b,a){return a},a[b.PARAGRAPH]=function(b,a){return v.createElement("p",null,a)},a[b.HEADING_1]=function(b,a){return v.createElement("h1",null,a)},a[b.HEADING_2]=function(b,a){return v.createElement("h2",null,a)},a[b.HEADING_3]=function(b,a){return v.createElement("h3",null,a)},a[b.HEADING_4]=function(b,a){return v.createElement("h4",null,a)},a[b.HEADING_5]=function(b,a){return v.createElement("h5",null,a)},a[b.HEADING_6]=function(b,a){return v.createElement("h6",null,a)},a[b.EMBEDDED_ENTRY]=function(b,a){return v.createElement("div",null,a)},a[b.UL_LIST]=function(b,a){return v.createElement("ul",null,a)},a[b.OL_LIST]=function(b,a){return v.createElement("ol",null,a)},a[b.LIST_ITEM]=function(b,a){return v.createElement("li",null,a)},a[b.QUOTE]=function(b,a){return v.createElement("blockquote",null,a)},a[b.HR]=function(){return v.createElement("hr",null)},a[b.TABLE]=function(b,a){return v.createElement("table",null,v.createElement("tbody",null,a))},a[b.TABLE_ROW]=function(b,a){return v.createElement("tr",null,a)},a[b.TABLE_HEADER_CELL]=function(b,a){return v.createElement("th",null,a)},a[b.TABLE_CELL]=function(b,a){return v.createElement("td",null,a)},a[k.ASSET_HYPERLINK]=function(a){return C(k.ASSET_HYPERLINK,a)},a[k.ENTRY_HYPERLINK]=function(a){return C(k.ENTRY_HYPERLINK,a)},a[k.EMBEDDED_ENTRY]=function(a){return C(k.EMBEDDED_ENTRY,a)},a[k.HYPERLINK]=function(a,b){return v.createElement("a",{href:a.data.uri},b)},a),B=((g={})[j.BOLD]=function(a){return v.createElement("b",null,a)},g[j.ITALIC]=function(a){return v.createElement("i",null,a)},g[j.UNDERLINE]=function(a){return v.createElement("u",null,a)},g[j.CODE]=function(a){return v.createElement("code",null,a)},g);function C(b,a){return v.createElement("span",{key:a.data.target.sys.id},"type: ",a.nodeType," id: ",a.data.target.sys.id)}o.h=function(b,a){return(void 0===a&&(a={}),b)?z(b,{renderNode:w(w({},A),a.renderNode),renderMark:w(w({},B),a.renderMark),renderText:a.renderText}):null}},549:function(c,b){var a;Object.defineProperty(b,"__esModule",{value:!0}),b.BLOCKS=void 0,(a=b.BLOCKS||(b.BLOCKS={})).DOCUMENT="document",a.PARAGRAPH="paragraph",a.HEADING_1="heading-1",a.HEADING_2="heading-2",a.HEADING_3="heading-3",a.HEADING_4="heading-4",a.HEADING_5="heading-5",a.HEADING_6="heading-6",a.OL_LIST="ordered-list",a.UL_LIST="unordered-list",a.LIST_ITEM="list-item",a.HR="hr",a.QUOTE="blockquote",a.EMBEDDED_ENTRY="embedded-entry-block",a.EMBEDDED_ASSET="embedded-asset-block",a.TABLE="table",a.TABLE_ROW="table-row",a.TABLE_CELL="table-cell",a.TABLE_HEADER_CELL="table-header-cell"},1928:function(e,a,c){Object.defineProperty(a,"__esModule",{value:!0});var b=c(549),d={nodeType:b.BLOCKS.DOCUMENT,data:{},content:[{nodeType:b.BLOCKS.PARAGRAPH,data:{},content:[{nodeType:"text",value:"",marks:[],data:{}},]},]};a.default=d},6061:function(c,a,b){Object.defineProperty(a,"__esModule",{value:!0}),a.isText=a.isBlock=a.isInline=void 0;var d=b(549),e=b(7845);function f(b,d){for(var a=0,c=Object.keys(b);a<c.length;a++)if(d===b[c[a]])return!0;return!1}a.isInline=function(a){return f(e.INLINES,a.nodeType)},a.isBlock=function(a){return f(d.BLOCKS,a.nodeType)},a.isText=function(a){return"text"===a.nodeType}},6437:function(f,a,b){var g=this&&this.__createBinding||(Object.create?function(e,c,d,b){void 0===b&&(b=d);var a=Object.getOwnPropertyDescriptor(c,d);(!a||("get"in a?!c.__esModule:a.writable||a.configurable))&&(a={enumerable:!0,get:function(){return c[d]}}),Object.defineProperty(e,b,a)}:function(c,d,b,a){void 0===a&&(a=b),c[a]=d[b]}),h=this&&this.__setModuleDefault||(Object.create?function(a,b){Object.defineProperty(a,"default",{enumerable:!0,value:b})}:function(a,b){a.default=b}),c=this&&this.__exportStar||function(b,c){for(var a in b)"default"===a||Object.prototype.hasOwnProperty.call(c,a)||g(c,b,a)},d=this&&this.__importStar||function(a){if(a&&a.__esModule)return a;var b={};if(null!=a)for(var c in a)"default"!==c&&Object.prototype.hasOwnProperty.call(a,c)&&g(b,a,c);return h(b,a),b},i=this&&this.__importDefault||function(a){return a&&a.__esModule?a:{"default":a}};Object.defineProperty(a,"__esModule",{value:!0}),a.helpers=a.EMPTY_DOCUMENT=a.MARKS=a.INLINES=a.BLOCKS=void 0;var j=b(549);Object.defineProperty(a,"BLOCKS",{enumerable:!0,get:function(){return j.BLOCKS}});var k=b(7845);Object.defineProperty(a,"INLINES",{enumerable:!0,get:function(){return k.INLINES}});var l=b(1376);Object.defineProperty(a,"MARKS",{enumerable:!0,get:function(){return i(l).default}}),c(b(7951),a),c(b(167),a),c(b(1911),a);var m=b(1928);Object.defineProperty(a,"EMPTY_DOCUMENT",{enumerable:!0,get:function(){return i(m).default}});var e=d(b(6061));a.helpers=e},7845:function(c,a){var b;Object.defineProperty(a,"__esModule",{value:!0}),a.INLINES=void 0,(b=a.INLINES||(a.INLINES={})).HYPERLINK="hyperlink",b.ENTRY_HYPERLINK="entry-hyperlink",b.ASSET_HYPERLINK="asset-hyperlink",b.EMBEDDED_ENTRY="embedded-entry-inline"},1376:function(d,c){var b,a;Object.defineProperty(c,"__esModule",{value:!0}),(a=b||(b={})).BOLD="bold",a.ITALIC="italic",a.UNDERLINE="underline",a.CODE="code",c.default=b},1911:function(b,a){Object.defineProperty(a,"__esModule",{value:!0})},7951:function(g,b,e){var c,f=this&&this.__spreadArray||function(d,b,e){if(e||2===arguments.length)for(var c,a=0,f=b.length;a<f;a++)!c&&a in b||(c||(c=Array.prototype.slice.call(b,0,a)),c[a]=b[a]);return d.concat(c||Array.prototype.slice.call(b))};Object.defineProperty(b,"__esModule",{value:!0}),b.V1_NODE_TYPES=b.TEXT_CONTAINERS=b.HEADINGS=b.CONTAINERS=b.VOID_BLOCKS=b.TABLE_BLOCKS=b.LIST_ITEM_BLOCKS=b.TOP_LEVEL_BLOCKS=void 0;var a=e(549),d=e(7845);b.TOP_LEVEL_BLOCKS=[a.BLOCKS.PARAGRAPH,a.BLOCKS.HEADING_1,a.BLOCKS.HEADING_2,a.BLOCKS.HEADING_3,a.BLOCKS.HEADING_4,a.BLOCKS.HEADING_5,a.BLOCKS.HEADING_6,a.BLOCKS.OL_LIST,a.BLOCKS.UL_LIST,a.BLOCKS.HR,a.BLOCKS.QUOTE,a.BLOCKS.EMBEDDED_ENTRY,a.BLOCKS.EMBEDDED_ASSET,a.BLOCKS.TABLE,],b.LIST_ITEM_BLOCKS=[a.BLOCKS.PARAGRAPH,a.BLOCKS.HEADING_1,a.BLOCKS.HEADING_2,a.BLOCKS.HEADING_3,a.BLOCKS.HEADING_4,a.BLOCKS.HEADING_5,a.BLOCKS.HEADING_6,a.BLOCKS.OL_LIST,a.BLOCKS.UL_LIST,a.BLOCKS.HR,a.BLOCKS.QUOTE,a.BLOCKS.EMBEDDED_ENTRY,a.BLOCKS.EMBEDDED_ASSET,],b.TABLE_BLOCKS=[a.BLOCKS.TABLE,a.BLOCKS.TABLE_ROW,a.BLOCKS.TABLE_CELL,a.BLOCKS.TABLE_HEADER_CELL,],b.VOID_BLOCKS=[a.BLOCKS.HR,a.BLOCKS.EMBEDDED_ENTRY,a.BLOCKS.EMBEDDED_ASSET],b.CONTAINERS=((c={})[a.BLOCKS.OL_LIST]=[a.BLOCKS.LIST_ITEM],c[a.BLOCKS.UL_LIST]=[a.BLOCKS.LIST_ITEM],c[a.BLOCKS.LIST_ITEM]=b.LIST_ITEM_BLOCKS,c[a.BLOCKS.QUOTE]=[a.BLOCKS.PARAGRAPH],c[a.BLOCKS.TABLE]=[a.BLOCKS.TABLE_ROW],c[a.BLOCKS.TABLE_ROW]=[a.BLOCKS.TABLE_CELL,a.BLOCKS.TABLE_HEADER_CELL],c[a.BLOCKS.TABLE_CELL]=[a.BLOCKS.PARAGRAPH],c[a.BLOCKS.TABLE_HEADER_CELL]=[a.BLOCKS.PARAGRAPH],c),b.HEADINGS=[a.BLOCKS.HEADING_1,a.BLOCKS.HEADING_2,a.BLOCKS.HEADING_3,a.BLOCKS.HEADING_4,a.BLOCKS.HEADING_5,a.BLOCKS.HEADING_6,],b.TEXT_CONTAINERS=f([a.BLOCKS.PARAGRAPH],b.HEADINGS,!0),b.V1_NODE_TYPES=[a.BLOCKS.DOCUMENT,a.BLOCKS.PARAGRAPH,a.BLOCKS.HEADING_1,a.BLOCKS.HEADING_2,a.BLOCKS.HEADING_3,a.BLOCKS.HEADING_4,a.BLOCKS.HEADING_5,a.BLOCKS.HEADING_6,a.BLOCKS.OL_LIST,a.BLOCKS.UL_LIST,a.BLOCKS.LIST_ITEM,a.BLOCKS.HR,a.BLOCKS.QUOTE,a.BLOCKS.EMBEDDED_ENTRY,a.BLOCKS.EMBEDDED_ASSET,d.INLINES.HYPERLINK,d.INLINES.ENTRY_HYPERLINK,d.INLINES.ASSET_HYPERLINK,d.INLINES.EMBEDDED_ENTRY,"text",]},167:function(b,a){Object.defineProperty(a,"__esModule",{value:!0})}}])