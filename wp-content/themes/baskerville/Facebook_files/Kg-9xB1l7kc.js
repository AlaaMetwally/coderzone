if (self.CavalryLogger) { CavalryLogger.start_js(["hL4QF"]); }

__d("SignalsPartnerIntegrationsLoggingScopes",["keyMirror"],(function(a,b,c,d,e,f){"use strict";e.exports=b("keyMirror")({DETAILS:null,LIST:null,MANAGEMENT:null,SEARCH:null,SETUP:null})}),null);
__d("ConversationNubCollapsedSelectorMenu.react",["cx","fbt","ConversationNubUtils","LeftRight.react","PinnedConversationNubsConfig","PopoverMenu.react","PopoverMenuOverlappingBorder","React","ReactMenu","Tooltip.react","XUIBadge.react"],(function(a,b,c,d,e,f,g,h){"use strict";__p&&__p();var i,j=b("ReactMenu").Item,k=300;c=babelHelpers.inherits(a,b("React").Component);i=c&&c.prototype;function a(a){i.constructor.call(this,a),this.state={hasTooltip:!0},this.$1=!1}a.prototype.componentDidMount=function(){this.$2(this.props.menuTabs)};a.prototype.componentDidUpdate=function(a){this.$2(this.$3(a,this.props))};a.prototype.$2=function(a){a.forEach(b("ConversationNubUtils").informShouldRecheckTabVisibility)};a.prototype.$3=function(a,b){a=a.menuTabs;b=b.menuTabs;var c={};a.forEach(function(a){c[a.getTabID()]=a});return b.filter(function(a){return c[a.getTabID()]!==a})};a.prototype.$4=function(){var a=this.props.menuTabs;return a.map(function(a){return a.getBadgeCount()}).reduce(function(a,b){return a+(b||0)},0)};a.prototype.$5=function(a,c){return a?b("React").createElement(b("XUIBadge.react"),{type:"special",count:a,className:"_4frs"+(c?" _30ql":""),"aria-hidden":c}):null};a.prototype.$6=function(){var a=this.$4();return this.$5(a,!1)};a.prototype.$7=function(a,c){c=this.$5(c,!0);a=this.$5(a,!1);var d=null;a&&(d=b("React").createElement("span",{className:"_2ja6"},a));return b("React").createElement("span",{className:"_2ja7"},c,d)};a.prototype.$8=function(a,c){__p&&__p();var d=a.getTabID(),e=a.getFeedbackTargetID(),f=a.getTitle(),g=a.getBadgeCount();g=this.$7(g,c);var h=!1;return b("React").createElement(j,{key:d,className:"_30qm",onclick:function(){if(h){h=!1;return}this.$1=!1;this.refs.menu.hidePopover();this.props.onTabSelected&&this.props.onTabSelected(a)}.bind(this)},b("React").createElement(b("LeftRight.react"),null,b("React").createElement("span",null,g,b("React").createElement("span",null,f)),b("React").createElement("i",{className:"_30qn uiCloseButton uiCloseButtonSmall",onClick:function(a){a.stopPropagation(),a.preventDefault(),this.props.menuTabs.length>1&&(this.$1=!0),b("ConversationNubUtils").informShouldCloseTab(d,e,b("ConversationNubUtils").CLOSE_REASON_OVERFLOW_X_OUT)}.bind(this),onMouseDown:function(){h=!0},role:"button",tabIndex:"0"})))};a.prototype.$9=function(){var a=this.props.menuTabs;return a.reduce(function(a,b){return Math.max(a,b.getBadgeCount())},1)};a.prototype.$10=function(){var a=this.props.menuTabs,c=this.$9();a=a.map(function(a){return this.$8(a,c)}.bind(this));return b("React").createElement(b("ReactMenu"),{maxheight:k},a)};a.prototype.$11=function(){return h._("Posts")};a.prototype.$12=function(){var a=this.$6();a=b("React").createElement("div",{className:"_4fs1"},a,b("React").createElement("i",{className:"_4fs2"}));this.state.hasTooltip&&(a=b("React").createElement(b("Tooltip.react"),{tooltip:this.$11(),display:"block",alignH:"right"},a));return b("React").createElement("div",{className:"_2ja9"},a)};a.prototype.render=function(){var a=this.$10(),c=b("PinnedConversationNubsConfig").pinnedToLeft?"left":"right";return b("React").createElement(b("PopoverMenu.react"),{menu:a,ref:"menu",position:"above",alignh:c,behaviors:[b("PopoverMenuOverlappingBorder")],onShow:function(){this.$1=!1,this.setState({hasTooltip:!1})}.bind(this),onHide:function(){this.$1?(this.$1=!1,this.refs.menu.showPopover()):this.setState({hasTooltip:!0})}.bind(this)},this.$12())};e.exports=a}),null);