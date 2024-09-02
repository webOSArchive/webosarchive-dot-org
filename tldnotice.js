function notifyTLDChange() {
  try {
      if (window.location.href.indexOf("?redir=tld") != -1 || window.location.href.indexOf("&redir=tld") != -1) {
          var myNotification = window.createNotification({});
          myNotification({ 
              title: 'You visited an old URL!',
              displayCloseButton: true,
              theme: 'info',
              message: 'webOSArchive.com is now webOSArchive.org! Please update your bookmarks to use the new URL. The old domain will stop working soon!' 
          });
      }
  } catch (e) {
      console.log("Could not notify user of new TLD (.org): ", e);
  }
}
window.addEventListener("load", function() {this.document.body.addEventListener("load", notifyTLDChange() );})
