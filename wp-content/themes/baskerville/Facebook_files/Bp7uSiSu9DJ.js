if (self.CavalryLogger) { CavalryLogger.start_js(["sVBTv"]); }

__d("ChatOfflineTabSheet.react",["cx","fbt","React","WorkModeConfig"],(function(a,b,c,d,e,f,g,h){"use strict";__p&&__p();var i;c=b("React").PropTypes;i=babelHelpers.inherits(a,b("React").Component);i&&i.prototype;a.prototype.render=function(){var a=this.props,c=a.turnOnChat;a=a.shortName;c=b("React").createElement("a",{href:"#",className:"fbChatGoOnlineLink",onClick:c},h._("turn on chat"));var d=void 0;b("WorkModeConfig").is_work_user?d=h._("To chat with {name} and other co-workers, {link}.",[h._param("name",a),h._param("link",c)]):d=h._("To chat with {name} and other friends, {link}.",[h._param("name",a),h._param("link",c)]);return b("React").createElement("div",{className:"_2phz _1sk1"},b("React").createElement("div",{className:"_1skc","data-jsid":"image"}),b("React").createElement("div",{className:"_1skd","data-jsid":"text"},d))};a.prototype.componentWillUnmount=function(){this.props.privacyActionController&&this.props.privacyActionController.destroy()};function a(){i.apply(this,arguments)}a.propTypes={shortName:c.string.isRequired,turnOnChat:c.func.isRequired,privacyActionController:c.object};e.exports=a}),null);
__d("FantaTabSheetOffline.react",["ChatOfflineTabSheet.react","ChatVisibility","JSLogger","MercuryIDs","MessengerParticipants.bs","React"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g;c=b("React").PropTypes;d=babelHelpers.inherits(a,b("React").Component);g=d&&d.prototype;function a(a){g.constructor.call(this,a);this.$2=b("JSLogger").create("blackbird");a=b("MercuryIDs").getUserIDFromThreadID(a.threadID);if(a){a=b("MercuryIDs").getParticipantIDFromUserID(a);this.$1=b("MessengerParticipants.bs").getNow(a)}}a.prototype.render=function(){__p&&__p();var a=this.props,c=a.privacyController,d=a.threadID,e=this.$1,f=this.$2;if(e){a=function(){var a=b("MercuryIDs").getUserIDFromThreadID(d);return{v:b("React").createElement(b("ChatOfflineTabSheet.react"),{shortName:e.short_name,privacyActionController:null,turnOnChat:function(event){event.preventDefault(),b("ChatVisibility").isOnline()&&f.error("tab_sheet_already_online"),c.togglePrivacy(),f.log("tab_sheet_go_online",{tab_id:a})}})}}();if(typeof a==="object")return a.v}return null};a.propTypes={privacyController:c.object.isRequired,threadID:c.string.isRequired};e.exports=a}),null);