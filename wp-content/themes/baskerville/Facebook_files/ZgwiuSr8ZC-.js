if (self.CavalryLogger) { CavalryLogger.start_js(["13AEt"]); }

__d("PageLikeButtonLazy",["Arbiter","Bootloader","Event","PageLikeConstants","SubscriptionsHandler","ifRequired","setImmediate"],(function(a,b,c,d,e,f){__p&&__p();var g=new(b("SubscriptionsHandler"))(),h=[],i=!1,j=!1,k=b("PageLikeConstants").LIKED,l=b("PageLikeConstants").UNLIKED,m=b("PageLikeConstants").SPM_CALLOUT,n=b("PageLikeConstants").LAZY_CLICK,o={init:function(a,b,c,d,e,f,g,h,i,j,k,l){o._initWithArgs(a,b,c,d,e,f,g,h,i,j,k,l)},_initWithArgs:function(){for(var a=arguments.length,c=Array(a),d=0;d<a;d++)c[d]=arguments[d];b("ifRequired")("PageLikeButton",function(a){return a.init.apply(a,c)},function(){c[11]=babelHelpers["extends"]({},c[11],{isLazy:!0}),this._startListening(c[1]),h.push(c)}.bind(this))},_startListening:function(a){i||(i=!0,g.addSubscriptions(b("Arbiter").subscribe([k,l,m],function(event,a){b("Arbiter").inform(event+".lazy",a,b("Arbiter").BEHAVIOR_PERSISTENT),this._bootload()}.bind(this)))),g.addSubscriptions(b("Event").listen(a,"click",function(event){b("Arbiter").inform(n,{event:event,node:a},b("Arbiter").BEHAVIOR_PERSISTENT),b("setImmediate")(function(){return this._bootload()}.bind(this))}.bind(this)))},_bootload:function(){if(j)return;j=!0;b("Bootloader").loadModules(["PageLikeButton"],function(a){g.release(),h.forEach(function(b){return a.init.apply(a,b)})},"PageLikeButtonLazy")}};e.exports=o}),null);
__d("HoverButton",["csx","cx","AsyncRequest","CSS","DOM","URI"],(function(a,b,c,d,e,f,g,h){__p&&__p();function a(a,b,c,d){"use strict";this._button=a,this._flyout=b,this._flyoutAjaxify=d,this._flyoutContent=c,b.subscribe("show",this._onShow.bind(this)),b.subscribe("hide",this._onHide.bind(this))}a.prototype.showFlyoutBriefly=function(){"use strict";this.showFlyout(),this._flyout.hideFlyoutDelayed(5e3)};a.prototype.showFlyout=function(){"use strict";this._flyout.showFlyout(this._button,!0),this._flyout.inform("show",this._button)};a.prototype.hideFlyout=function(){"use strict";this._flyout.hideFlyout(!0),this._flyout.inform("hide",this._button)};a.prototype.enableButton=function(){"use strict";this._flyout.initNode(this._button)};a.prototype.disableButton=function(){"use strict";this.hideFlyout(),this._flyout.deactivateNode(this._button)};a.prototype._onShow=function(a,c){"use strict";b("CSS").addClass(c,"_52nd"),(b("CSS").hasClass(c,"uiButton")||b("CSS").matchesSelector(c,"._42fu"))&&b("CSS").addClass(c,"selected"),this._flyoutAjaxify&&(b("CSS").addClass(this._flyoutContent,"async_saving"),new(b("AsyncRequest"))().setURI(new(b("URI"))(this._flyoutAjaxify)).setHandler(function(a){b("CSS").removeClass(this._flyoutContent,"async_saving"),b("DOM").setContent(this._flyoutContent,a.payload)}.bind(this)).send(),this._flyoutAjaxify=null)};a.prototype._onHide=function(a,c){"use strict";b("CSS").removeClass(c,"_52nd"),(b("CSS").hasClass(c,"uiButton")||b("CSS").matchesSelector(c,"._42fu"))&&b("CSS").removeClass(c,"selected")};a.prototype.destroy=function(){"use strict";this.hideFlyout(),this._flyout.destroy()};a.prototype.suppressNextMouseEnter=function(){"use strict";this._flyout.setActiveNode(this._button)};Object.assign(a.prototype,{_button:null,_flyout:null,_flyoutAjaxify:null,_flyoutContent:null});e.exports=a}),null);
__d("SwapButton",["DOM","Event","Focus"],(function(a,b,c,d,e,f){__p&&__p();function g(a,c,d){b("DOM").insertAfter(c,a),b("DOM").remove(c),d&&b("Focus").setWithoutOutline(a)}function a(a,c,d){"use strict";this._swapperButton=a,this._swappeeButton=c,b("Event").listen(a,"click",g.bind(null,c,a,!0)),d&&b("Event").listen(c,"click",g.bind(null,a,c,!0))}a.prototype.swap=function(a){"use strict";this._swapperButton.parentNode&&g(this._swappeeButton,this._swapperButton,a)};a.prototype.unswap=function(a){"use strict";this._swapperButton.parentNode||g(this._swapperButton,this._swappeeButton,a)};a.prototype.toggle=function(a){"use strict";this._swapperButton.parentNode?this.swap(a):this.unswap(a)};a.prototype.getCurrentButton=function(){"use strict";return this._swapperButton.parentNode?this._swapperButton:this._swappeeButton};Object.assign(a.prototype,{_swapperButton:null,_swappeeButton:null});e.exports=a}),null);
__d("HoverFlyout",["Arbiter","ArbiterMixin","DataStore","Event","Keys","mixin","removeFromArray","shield"],(function(a,b,c,d,e,f){__p&&__p();var g;d=babelHelpers.inherits(c,b("mixin")(b("ArbiterMixin")));g=d&&d.prototype;function c(a,c,d,e){"use strict";g.constructor.call(this),a&&(this._showDelay=d,this._hideDelay=e,this.init(a),c&&this.initNode(c)),b("Arbiter").subscribe("SwapButtonDEPRECATED/focusOnJoinButton",b("shield")(this.hideFlyout,this),b("Arbiter").SUBSCRIBE_ALL)}c.prototype.init=function(a){"use strict";__p&&__p();this._flyout=a;this._showDelay=this._showDelay||0;this._hideDelay=this._hideDelay||100;this._showTimeout=null;this._hideTimeout=null;this._flyoutSubscriptions=[this._flyout.subscribe("mouseenter",this._onFlyoutMouseEnter.bind(this)),this._flyout.subscribe("mouseleave",b("shield")(this.hideFlyout,this))];this._nodes=[];this._dataStoreUnique="HoverFlyout_"+Date.now()+"_listeners";return this};c.prototype.initNode=function(a){"use strict";if(this._nodes.includes(a))return this;this._nodes.push(a);b("DataStore").set(a,this._dataStoreUnique,[b("Event").listen(a,"mouseenter",this._onNodeMouseEnter.bind(this,a)),b("Event").listen(a,"mouseleave",b("shield")(this.hideFlyout,this)),b("Event").listen(a,"click",this._onNodeMouseEnter.bind(this,a)),b("Event").listen(a,"keydown",this._onNodeKeyEscape.bind(this))]);return this};c.prototype.deactivateNode=function(a){"use strict";var c=b("DataStore").get(a,this._dataStoreUnique);if(c)while(c.length)c.pop().remove();b("removeFromArray")(this._nodes,a)};c.prototype.setShowDelay=function(a){"use strict";this._showDelay=a;return this};c.prototype.setHideDelay=function(a){"use strict";this._hideDelay=a;return this};c.prototype.showFlyout=function(a,b){"use strict";this.setActiveNode(a);b?(this._flyout.setContext(a).show(),this.inform("show",a)):this._showTimeout=setTimeout(this.showFlyout.bind(this,a,!0),this._showDelay);return this};c.prototype.hideFlyout=function(a){"use strict";clearTimeout(this._showTimeout),a?(this._flyout.hide(),this._activeNode&&this.inform("hide",this._activeNode),this._activeNode=null):this._hideTimeout=setTimeout(this.hideFlyout.bind(this,!0),this._hideDelay)};c.prototype.hideFlyoutDelayed=function(a){"use strict";clearTimeout(this._showTimeout),clearTimeout(this._hideTimeout),this._hideTimeout=setTimeout(this.hideFlyout.bind(this,!0),a)};c.prototype.getActiveNode=function(){"use strict";return this._activeNode};c.prototype.setActiveNode=function(a){"use strict";clearTimeout(this._hideTimeout);this._activeNode&&this._activeNode!==a&&this.hideFlyout(!0);this._activeNode=a;return this};c.prototype.clearNodes=function(){"use strict";for(var a=this._nodes.length;a>0;a--)this.deactivateNode(this._nodes[a-1])};c.prototype.destroy=function(){"use strict";while(this._flyoutSubscriptions.length)this._flyout.unsubscribe(this._flyoutSubscriptions.pop());this.clearNodes()};c.prototype._onNodeMouseEnter=function(a){"use strict";this._activeNode===a?clearTimeout(this._hideTimeout):this.showFlyout(a)};c.prototype._onFlyoutMouseEnter=function(){"use strict";clearTimeout(this._hideTimeout)};c.prototype._onNodeKeyEscape=function(event){"use strict";b("Event").getKeyCode(event)===b("Keys").ESC&&(this._activeNode&&this.inform("hide",this._activeNode),this._activeNode=null)};e.exports=a.HoverFlyout||c}),null);