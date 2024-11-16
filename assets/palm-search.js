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

/*****************************************************************
 File:palm-search.js
 Description: File contains basic code elements for all global
 palm.com pages.
 
 Requires: YUI (implemented with YUI 2.7)
 http://developer.yahoo.com/yui/
 
 Modules developed:
 Header support: Handles search bar, store account drop down, etc.
 
 Revisions:
 Rev 1: 1/3/2009 - Created Kevin Hague - Palm Web Marketing Team 
 Rev 2: 1/14/2009 - Fixed search bar issues on multi-word submits
 Rev 3: 3/4/2009 - further improvements for use globally
 Rev 4: 3/9/2009 - converted from mootools to YUI
 Rev 5: 4/11/2009 - added object ID tests for listeners
 fixed changed css target ID
 flyOutAccountToggle stop event (no IE6 clucks)
 Rev 6: 4/14/2009 - fixed stop event on a-hrefs in dropdown
 Rev 7: 4/16/2009 - added generic png handler
 Rev 8: 5/7/2009 - fixed issue with opacity on store dropdown menu for 'GDR' version of IE6
 Rev 9: 5/20/2009 - added omniture dynamic update
 Rev 10: 7/27/2009 - Added multi-country search capabilities
 Rev 11: 8/3/2009 - Added utitility to assist with retreival of country code
 Rev 12: 8/24/2009 - Added UTF conversion utility
 Rev 13: 8/31/2009 - Added Image swap utility
 Rev 13: 11/23/2009 - Fixed the search input value
 
 Author: Palm IT Web Team
 
 Notes: This is the de-compressed version of this file.  YUI compress and save as palm-basic-yui.js!
 ******************************************************************/

//create header namespace 
YAHOO.namespace('YAHOO.PALMHEADER');

//palm basic template page handler
YAHOO.PALMHEADER.basicPageHander = function () {

  var tempSearchInputSetting = $("local-search")?$("local-search").value:"Search...";

  //BEGIN private methods
  var searchInput = function (e) {
    $P.stopE(e);
    var val = $('globalsearchinput').value;
    if (e.type == 'focus') {
      $P.addClass('search-input-bg', 'input-focus');
      //$('search-input-bg').className = 'search-input-bg input-focus';
      $('globalsearchinput').value = '';
    } else {
      if (val == '' || val == tempSearchInputSetting) {
        //$('search-input-bg').className = 'search-input-bg';
        $P.removeClass('search-input-bg', 'input-focus');
        val = tempSearchInputSetting;
      }
    }
  }

  //submits the search bar query to GSA handler
  var searchSubmit = function (ev) {
    $P.stopE(ev);
    var val = $('globalsearchinput').value;
    if (val != tempSearchInputSetting) {
      //basePath = ($P.href.indexOf("cms") >-1)?"/assets/data/products/treopro-test.json" : "/cgi-bin/Proxy-HTTP-PWS.cgi?SkuElements=3252772"
      var searchValue = escape(val);
      var countryCode = "/"+$P.getCC()+"/";
      var QUERY = 'search/index.html?search=';
      var PUBLIC_DOMAIN = 'https://web.archive.org/web/20120428004740/http://www.palm.com';
      var STAGE_DOMAIN = 'https://web.archive.org/web/20120428004740/http://stage-www.palm.com';

      // not clear when we go to stage so leave it like this for now
      window.location.href =  PUBLIC_DOMAIN + countryCode + QUERY + searchValue;
    }
  }

  //store drop down: id=storeaccount-dropdown
  var flyOutAccountToggle = function (e) {

    tg = $P.event.getTarget(e);
    //stop event only on the "Store Account" link - allow passthrough on the real dropdown links
    if (tg.tagName.toUpperCase() == "A") {
      if (tg.href == "#") {
        $P.stopE(e);
      }
      if (tg.parentNode.id == "menu-storeaccount") {
        $P.stopE(e);
      }
    }

    if ($('menu-storeaccount').className != "on") {
      $('storeaccount-dropdown').className = "on";
      $('storeaccount-dropdown').style.opacity = 0.1;
      $('storeaccount-dropdown').style.display = "block";
      $('storeaccount-dropdown').style.visibility = "visible";
      var nScaleFactor = screen.deviceXDPI / screen.logicalXDPI;
      var fadeIn = new YAHOO.util.Anim('storeaccount-dropdown', {
        opacity: {
          to: 1.0
        }
      }, 0.6, YAHOO.util.Easing.easeOut);
      fadeIn.animate();
      YAHOO.util.Dom.setStyle(['dropdown-accessories', 'dropdown-software'], 'opacity', '1.0');
      $('menu-storeaccount').className = "on";
    } else {
      $('menu-storeaccount').className = "";
      $('storeaccount-dropdown').className = "";
      var fadeOut = new YAHOO.util.Anim('storeaccount-dropdown', {
        opacity: {
          to: 0.0
        }
      }, 0.6, YAHOO.util.Easing.easeIn);
      fadeOut.onComplete.subscribe(function () {
        $('storeaccount-dropdown').style.display = "none";
      });
      fadeOut.animate();
    }
  }
  //END PRIVATE methods
  return {
    //PUBLIC methods
    //initialize the header javascript
    initHeader: function () {
      //fix background images flicker in IE6
      try {
        if (!window.XMLHttpRequest && document.uniqueID) {
          document.execCommand('BackgroundImageCache', false, true);
        }
      } catch (e) {}
      //setup search bar in header
      $P.event.onAvailable("globalsearchinput",function(){
        $P.event.addListener('globalsearchinput', 'focus', searchInput);
        $P.event.addListener('globalsearchinput', 'blur', searchInput);
        //reset the searchbar if returning from results
        $('globalsearchinput').blur();
        $('globalsearchinput').value = tempSearchInputSetting;
        //return key evt handler
        $P.event.addListener('globalsearchinput', 'keydown', function (e) {
          if (e.keyCode == 13) {
            searchSubmit(e);              console.log('available');

          }

        });
      });
      //setup search-submit overrides
      if ($P.inDoc('searchClickOverlay')) {
        $P.event.addListener('searchClickOverlay', 'click', searchSubmit);
      } else {
        //setup search-submit overrides
        if ($P.inDoc('search-submit')) {
          $P.event.addListener('search-submit', 'click', searchSubmit);
        }

      }
      //dropdown menu setup
      if ($P.inDoc('menu-storeaccount')) {
        $P.event.addListener('menu-storeaccount', 'click', flyOutAccountToggle);
      }
    }
  };
}();




//******************************IE helper - Yes Bill, Internet Explorer needs help********************************
YAHOO.namespace('YAHOO.PALMMSIE');
YAHOO.PALMMSIE.pnghander = function () { //basic img tag PNG handler
  var findImages = function (imageArray) {
    for (i = 0; i < imageArray.length; i++) { //iterate through IDs - use css hack for background images!
      if ($(imageArray[i]).tagName == "IMG") { //is it directly an IMG tag?
        if ($(imageArray[i]).className.indexOf("ie6-pngFix") > -1) {
          imgTagPngFix($(imageArray[i])); //call png fixer
        }
      } else { //it's a passed container ID and so we'll loop for classname key ie6-pngFix
        var tempImg = YAHOO.util.Dom.getElementsByClassName('ie6-pngFix', 'img', imageArray[i]); //get all matching class names within the container
        for (i = 0; i < tempImg.length; i++) {
          imgTagPngFix(tempImg[i]); //call png fixer
        }
      }
    }
  }
  var imgTagPngFix = function (tagPointer) {
    if (tagPointer.tagName == "IMG" && tagPointer.src.indexOf(".png") > -1) {
      //console.log("imgtagfix",tagPointer.tagName, tagPointer.src, tagPointer.src.indexOf(".png"));
      tagPointer.style.filter = 'progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod="image", src="' + tagPointer.src + '");';
      tagPointer.src = "assets/transPngFix.gif";
    }
  }

  return {
    init: function (imageArray) {

      if (YAHOO.env.ua.ie == 6 && imageArray.length > 0) {
        //YAHOO.log("find images found");
        findImages(imageArray);
      }
    }

  };
}();

//******************************OMNITURE s-code dynamic update ********************************
YAHOO.namespace('YAHOO.OMNITURE');
YAHOO.OMNITURE.update = function () {
  var setPageName = function (pageName) {
    s.pageName = pageName;
  }
  var setEvars = function (eVars) {
    if (eVars != "") {
      eval(eVars);
    }
  }
  var setSprops = function (sProps) {
    if (sProps != "") {
      eval(sProps);
    }
  }
  var post = function () {
    s.t();
  }
  return {
    //call using the following variables:
    //pageName = ""
    //sprops = 's.pageType="";s.prop1="us";s.prop2="us";s.prop30="www.palm.com";'
    //evars = 's.eVar30="www.palm.com";'
    postData: function (pageName, sProps, eVars) {
      setPageName(pageName);
      setSprops(sProps);
      setEvars(eVars);
      post();
    }
  };
}();

YAHOO.namespace('YAHOO.PALMUTIL');

//palm basic template page handler
YAHOO.PALMUTIL.util = function () {
  return {
    getCountryCode: function () {
      return $P.getCC();
    },
    //end country code
    UTFConvert: function (inputText) {
      inputText = inputText.replace(/&#33;/g, "!");
      inputText = inputText.replace(/&#36;/g, "$");
      inputText = inputText.replace(/&#38;/g, "\&");
      inputText = inputText.replace(/&#39;/g, "\'");

      inputText = inputText.replace(/&#58;/g, ":");
      inputText = inputText.replace(/&#59;/g, ";");
      inputText = inputText.replace(/&#63;/g, "?");
      inputText = inputText.replace(/&#64;/g, "@");

      inputText = inputText.replace(/&#91;/g, "[");
      inputText = inputText.replace(/&#92;/g, "\\");
      inputText = inputText.replace(/&#93;/g, "]");
      inputText = inputText.replace(/&#94;/g, "^");
      inputText = inputText.replace(/&#95;/g, "�");
      inputText = inputText.replace(/&#96;/g, "`");

      inputText = inputText.replace(/&#126;/g, "~");
      inputText = inputText.replace(/&#128;/g, "�");
      inputText = inputText.replace(/&#134;/g, "�");
      inputText = inputText.replace(/&#153;/g, "�");
      inputText = inputText.replace(/&#156;/g, "�");

      inputText = inputText.replace(/&#161;/g, "�");
      inputText = inputText.replace(/&#162;/g, "�");
      inputText = inputText.replace(/&#163;/g, "�");
      inputText = inputText.replace(/&#164;/g, "�");
      inputText = inputText.replace(/&#165;/g, "�");
      inputText = inputText.replace(/&#169;/g, "�");

      inputText = inputText.replace(/&#174;/g, "�");
      inputText = inputText.replace(/&#175;/g, "�");
      inputText = inputText.replace(/&#181;/g, "�");
      return inputText;
    }
  };
}();

/******************************************************************************************************************************************************************************************
 //MISC Palm Utils
 ******************************************************************************************************************************************************************************************/
var palmutil = function () {
  var tempRndClass = "";
  return {
    /******************************************************************************************************************************************************************************************
         classRandomSwitch - will randomly set the className of targId to a class from the classSelection array 
         ex.	var imgSwap = new palmutil;
         imgSwap.classRandomSwitch("featuredHero", ["hummingbird","two-fish", "skull","skin","red-barn"]); //double random seed for best result
         *******************************************************************************************************************************************************************************************/
    classRandomSwitch: function (targId, classSelection) {
      var tmpSelLen = classSelection.length;
      var rndSeed = Math.floor(Math.random() * tmpSelLen)
      rndSeed = (rndSeed < 0) ? rndSeed = 0 : (rndSeed > tmpSelLen - 1) ? tmpSelLen - 1 : rndSeed;
      if ($P.inDoc(targId)) {
        var tmpClass = $(targId).className;
        tempRndClass = classSelection[rndSeed];
        $(targId).className = tmpClass + " " + classSelection[rndSeed];
      }
    }
  }
}

//YAHOO Element DOM detection - HEADER
//see http://developer.yahoo.com/yui/event/#onavailable
//$P.event.onAvailable("header", YAHOO.PALMHEADER.basicPageHander.initHeader);
// YUI onAvailable will see if an element is available, but it doesn't check if all of the children are available
$P.event.onDOMReady(YAHOO.PALMHEADER.basicPageHander.initHeader);


}
/*
     FILE ARCHIVED ON 00:47:40 Apr 28, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 16:36:02 Nov 16, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 0.706
  exclusion.robots: 0.038
  exclusion.robots.policy: 0.023
  esindex: 0.011
  cdx.remote: 15.92
  LoadShardBlock: 345.348 (3)
  PetaboxLoader3.datanode: 320.485 (5)
  PetaboxLoader3.resolve: 123.94 (3)
  load_resource: 163.388 (2)
*/