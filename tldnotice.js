function notifyTLDChange() {
  try {
      if (window.location.href.indexOf("?redir=tld") != -1 || window.location.href.indexOf("&redir=tld") != -1) {
          var myNotification = window.createNotification({});
          modernURL = window.location.href.replace("webosarchive.com", "webosarchive.org");
          myNotification({ 
              title: 'Redirecting to webOSArchive.org!',
              displayCloseButton: true,
              theme: 'info',
              message: 'webOSArchive.com is now webOSArchive.org! Please update your bookmarks to use the new URL.' 
          });
      }
  } catch (e) {
      console.log("Could not notify user of new TLD (.org): ", e);
  }
}
window.addEventListener("load", function() {this.document.body.addEventListener("load", notifyTLDChange() );})
