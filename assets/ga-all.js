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

var PALMPUBLIC=(typeof PALMPUBLIC==="undefined")||!PALMPUBLIC?{}:PALMPUBLIC;PALMPUBLIC.PALMGOOGLEANALYTICS=function(){var e=YAHOO.util.Dom;var d=YAHOO.util.Event;var b=function(f,i){var h=i.data?i.data:"";h=f+" "+h;if(typeof(_gaq)==="object"){try{_gaq.push(["pageTracker._trackPageview",h]);_gaq.push(["rollupTracker._trackPageview",h])}catch(g){}}};var c=function(g,h){var f=d.getTarget(g);while(f&&f.tagName&&(f.tagName.toUpperCase()!="A")&&f!=window.document){f=f.parentNode}if(f&&f!=window.document){if(h&&h.dir){if(h.dir=="to"&&f.href){b(f.href,h)}else{if(h.dir=="from"){b(window.location.href,h)}}}}};var a=function(f,g){d.stopEvent(f);if(g.href){b(g.href,g)}};return{attach:function(g){for(var f=0;f<g.length;f++){var h=g[f];if(h&&h.id&&e.inDocument(h.id)&&h.dir){d.on(h.id,"click",c,h)}}},attachMarker:function(g){for(var f=0;f<g.length;f++){var h=g[f];if(h&&h.id&&e.inDocument(h.id)&&h.dir){if(!$(h.id).palm_props){$(h.id).palm_props=h[f]}d.on(h.id,"click",a,h)}}}}}();$PGA=PALMPUBLIC.PALMGOOGLEANALYTICS;


}
/*
     FILE ARCHIVED ON 14:37:16 Apr 04, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:27:40 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.521
  exclusion.robots: 0.027
  exclusion.robots.policy: 0.017
  esindex: 0.01
  cdx.remote: 14.165
  LoadShardBlock: 112.591 (3)
  PetaboxLoader3.datanode: 93.373 (4)
  PetaboxLoader3.resolve: 111.713 (2)
  load_resource: 125.016
*/