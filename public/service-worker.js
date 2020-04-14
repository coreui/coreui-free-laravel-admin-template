let self = this;
let urlMain;
let fetchUrl = "http://127.0.0.1:8000/notification/notification/get-notification";
self.addEventListener("push", function(event) {
   event.waitUntil(
        fetch(fetchUrl, {
        method: "get"
   })
  .then(function(response) {
        return response.json();
   })
  .then(function(result) {  
        urlMain = result.data.url;
        const options = {
            body: result.data.msg,
            icon: result.data.logo,
            image: result.data.name,
            action: result.data.url
            };
        self.registration.showNotification(result.data.title, options);
   })
   );
});

self.addEventListener("notificationclick", function(event) {
    event.notification.close();
    const promiseChain = clients.openWindow(urlMain);
    event.waitUntil(promiseChain);
});