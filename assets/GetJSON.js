var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

/*  Time-stamp: <2011-04-19 14:37:25> */
$P.pLog=YAHOO.log;$P.GetJSON=function(b){this.self=this;var c=this;this.method=b.method||"GET";if(b.url){this.url=b.url}else{$P.pLog("No url specified")}if(b.success){this.successCallback=b.success}else{$P.pLog("No callback")}this.postData=b.postData||null;this.loadingEl=null;if(b.loading){var a=$$(b.loading);if(a){this.loadingEl=a;$P.hide(a)}}this.formEl=$(b.formId)||null;this.context=$(b.context)||null;this.failureCallback=b.failure;this.callbackPlist={success:function(d){if(c.loadingEl){$P.hide(c.loadingEl)}var e=d.responseText;if(YAHOO.lang.JSON.isValid(e)){var f=YAHOO.lang.JSON.parse(e);c.successCallback(f,c.context)}else{$P.pLog("Invalid JSON");if(c.loadingEl){$P.hide(c.loadingEl)}var d={};d.status=-1;d.statusText="Invalid JSON";if(c.failureCallback){c.failureCallback(d)}}},failure:function(d){if(c.loadingEl){$P.hide(c.loadingEl)}$P.pLog("JSON call failed");if(c.failureCallback){c.failureCallback(d)}},cache:false};if(this.formEl){YAHOO.util.Connect.setForm(this.formEl)}if(this.loadingEl){$P.show(this.loadingEl)}this.req=YAHOO.util.Connect.asyncRequest(this.method,this.url,this.callbackPlist,this.postData)};$P.GetAJAX=$P.GetJSON;


}
/*
     FILE ARCHIVED ON 14:37:12 Apr 04, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:37:07 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.649
  exclusion.robots: 0.036
  exclusion.robots.policy: 0.022
  esindex: 0.016
  cdx.remote: 15.655
  LoadShardBlock: 168.372 (3)
  PetaboxLoader3.datanode: 89.3 (4)
  PetaboxLoader3.resolve: 151.755 (2)
  load_resource: 92.326
*/