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

var PALMPUBLIC=(typeof PALMPUBLIC==="undefined")||!PALMPUBLIC?{}:PALMPUBLIC;$P=PALMPUBLIC;$P.event=YAHOO.util.Event;$P.dom=YAHOO.util.Dom;$P.anim=YAHOO.util.Anim;$P.lang=YAHOO.lang;$=$P.dom.get;$$=YAHOO.util.Selector.query;$P.getRegion=$P.dom.getRegion;$P.byClass=$P.dom.getElementsByClassName;$P.addClass=$P.dom.addClass;$P.removeClass=$P.dom.removeClass;$P.replaceClass=$P.dom.replaceClass;$P.hasClass=$P.dom.hasClass;$P.setStyle=$P.dom.setStyle;$P.isArray=$P.lang.isArray;$P.setAttribute=$P.dom.setAttribute;$P.isIE=YAHOO.env.ua.ie;$P.isIE6=($P.isIE>0&&$P.isIE<7)?true:false;$P.isIE7=($P.isIE>0&&$P.isIE<8)?true:false;$P.isIE8=($P.isIE>0&&$P.isIE<9)?true:false;$P.HIDE="hide";$P.OPACITY="opacity";$P.inDoc=$P.dom.inDocument;$P.isAgent=function(d){var c=false;for(var b=0,a=d.length;b<a;b++){if(window.navigator.userAgent.indexOf(d[b]>-1)){c=true;break}}return c};$P.getHeight=function(a){if($P.inDoc(a)){var b=$P.dom.getRegion(a);return(b.bottom-b.top)}};$P.getWidth=function(a){if($P.inDoc(a)){var b=$P.dom.getRegion(a);return(b.right-b.left)}};$P.stopE=function(a){return $P.event.stopEvent(a)};$P.easeIn=YAHOO.util.Easing.easeIn;$P.easeOut=YAHOO.util.Easing.easeOut;$P.show=function(a){$P.removeClass(a,$P.HIDE)};$P.hide=function(a){$P.addClass(a,$P.HIDE)};$P.isShowing=function(a){return(!$P.hasClass(a,$P.HIDE))};$P.isHidden=function(a){return($P.hasClass(a,$P.HIDE))};$P.isPhone=function(){var a=navigator.userAgent.toLowerCase();var c=false;var e=["iphone","ipod","ipad","series60","symbian","android","windows ce","windows phone","blackberry","palm","webos"];for(var d=0,b=e.length;d<b;d++){if((a.search(e[d]))>-1){c=true;break}}return c};$P.toggleDiv=function(a){if($P.inDoc(a)){if($P.dom.hasClass(a,$P.HIDE)){$P.removeClass(a,$P.HIDE)}else{$P.addClass(a,$P.HIDE)}}};$P.insert=function(a,c){var b=$(a);if(b){$(a).innerHTML=c}};$P.preloadImages=function(c){var b=[];if(document.images){for(var a=0;a<=c.length;a++){c[a]=new Image();b[a].src=c[a]}}};$P.clear=function(a){$P.insert(a,"")};$P.findTarget=function(d,f){var c=d;var e=d;var b=e.tagName.toLowerCase();var a=f.toLowerCase();while((e!==window)&&(b!==a)){e=e.parentNode;b=e.tagName.toLowerCase()}return(e===window)?null:e};$P.doClick=function(c){try{var b=document.createEvent("MouseEvents");b.initMouseEvent("click",true,true,window,0,0,0,0,0,false,false,false,false,0,null);var a=!c.dispatchEvent(b);if(a){}else{}}catch(d){c.click()}};$P.extend=YAHOO.lang.extend;$P.localizeUrl=function(a){var b=$("cc");if(!b){return a}var c=(b.value)?b.value:(b.innerHTML)?b.innerHTML:"";c=(c.indexOf("/")===0)?c:("/"+c+"/");a=((a.indexOf("/")===0)||(a.indexOf("http")===0))?a:c+a;return a};$P.getCC=function(){var a=$("cc");if(!a){return""}var b=(a.value)?a.value:(a.innerHTML)?a.innerHTML:"";return b};

}
/*
     FILE ARCHIVED ON 00:47:39 Apr 28, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:35:44 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.679
  exclusion.robots: 0.057
  exclusion.robots.policy: 0.045
  esindex: 0.011
  cdx.remote: 24.596
  LoadShardBlock: 135.071 (3)
  PetaboxLoader3.datanode: 310.839 (5)
  load_resource: 399.777 (2)
  PetaboxLoader3.resolve: 159.23 (2)
*/