/*
06.04.2020
notifications.js
*/

let self = this;
let isPushEnabled = false;
let pushButton = document.querySelector("#push-button");
let desc = document.querySelector("#push-info-p");
let disableText = "Unsubscribe Notifications";
let enableText = "Subscribe Notifications";
let disableDesc = "Thank you for enable notifications from page";
let enableDesc = "Here you can enable notifications from this page";
let fetchUrl = "http://127.0.0.1:8000/notification/notification";

console.log('BBBBBBBBBBBBBBBBB');

function sendSubscriptionToServer(subscription) {
    var temp = subscription.endpoint.split("/");
    var registration_id = temp[temp.length - 1];
    fetch(
        fetchUrl + '/insertGCM/' + registration_id,
            { method: "get" } 
        ).then(function(response) {
            return response.json();
        }
    );
}
 
function deleteSubscriptionToServer(rid) {
    fetch(fetchUrl + '/deleteGCM/' + rid, {
            method: "get"
        }).then(function(response) {
            return response.json();
        }
    );
}

function serviceWorkerCall() {
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("/js/service-worker.js").then(initialiseState).then(function(){console.log('call service-worker')});
    }else{
        console.warn("Service workers aren't supported in this browser.");
    }
 }
 
 function initialiseState() {
    if (!("showNotification" in ServiceWorkerRegistration.prototype)) {
       console.log("Notifications aren't supported.");
       return;
     }
 
     if (Notification.permission === "denied") {
      console.log("The user has blocked notifications.");
      return;
     }
 
     if (!("PushManager" in window)) {
      console.log("Push messaging isn't supported.");
      return;
     }
 
     navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
        serviceWorkerRegistration.pushManager
        .getSubscription()
        .then(function(subscription) {
            pushButton.disabled = false;
            if (!subscription) {
              return;
         }
         if (subscription) {
           sendSubscriptionToServer(subscription);
         }
 
      pushButton.textContent = disableText;
        desc.textContent = disableDesc;
        isPushEnabled = true;
       })
 .catch(function(e) {
    console.log("Error during getSubscription()", e);
 });
 });
 }

 function subscribe() {
    console.log('A');
    //pushButton.disabled = true;
    navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
        console.log('B');
        serviceWorkerRegistration.pushManager.subscribe({ userVisibleOnly: true })
        .then(function(subscription) {
                console.log('C');
                isPushEnabled = true;
                pushButton.textContent = disableText;
                desc.textContent = disableDesc;
                pushButton.disadbled = false;
                console.log('D');
            if (subscription) {
                console.log('E');
                sendSubscriptionToServer(subscription);
            }
        })
        .catch(function(e) {
            console.log('F');
            if (Notification.permission === "denied") {
                console.warn("Permission for Notification is denied");
                pushButton.disabled = true;
            } else {
                console.error("Unable to subscribe to push", e);
                pushButton.disabled = true;
                pushButton.textContent = "Enable Push Messages";
            }
            console.log('G');
        });
    });
 }
 
 function unsubscribe() {
    pushButton.disabled = true;
    navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    serviceWorkerRegistration.pushManager
    .getSubscription()
    .then(function(pushSubscription) {
    if (!pushSubscription) {
      isPushEnabled = false;
      pushButton.disabled = false;
      pushButton.textContent = enableText;
      desc.textContent = enableDesc;
      return;
    }
 
    var temp = pushSubscription.endpoint.split("/");
    var registration_id = temp[temp.length - 1];
    deleteSubscriptionToServer(registration_id);
 
    pushSubscription.unsubscribe().then(function(successful) {
      pushButton.disabled = false;
      pushButton.textContent = enableText;
      desc.textContent = enableDesc;
      isPushEnabled = false;
   })
   .catch(function(e) {
     console.error("Error thrown while unsbscribing from push messaging.");
   });
  });
 });
 }


 /*
document.addEventListener("DOMContentLoaded", function() {
    if (isPushEnabled) {
        console.log('unsubscribe');
      unsubscribe();
    } else {
        console.log('subscribe');
      subscribe();
    }
    serviceWorkerCall();
});
*/

function urlBase64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - (base64String.length % 4)) % 4);
    const base64 = (base64String + padding).replace(/\-/g, '+').replace(/_/g, '/');
    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);
    for (let i = 0; i < rawData.length; ++i) {
      outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}




function initialiseState() {
    if(!("showNotification" in ServiceWorkerRegistration.prototype)) {
        console.log("Notifications aren't supported.");
        return;
    }
    if(Notification.permission === "denied") {
        console.log("The user has blocked notifications.");
        return;
    }
    if(!("PushManager" in window)) {
        console.log("Push messaging isn't supported.");
        return;
    }
    console.log('C');
    navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {

        console.log('D');

        serviceWorkerRegistration.pushManager
        .getSubscription()
        .then(function(subscription) {

            console.log('A', subscription);

            pushButton.disabled = false;
            if (!subscription) {
                console.log('EEE');
                serviceWorkerRegistration.pushManager.subscribe({
                    userVisibleOnly: true,
                    applicationServerKey: urlBase64ToUint8Array(window.vapidPublicKey),
                   //applicationServerKey: window.vapidPublicKey,
                }).then(function(subscription) {
                    console.log('EEE-2');
                    isPushEnabled = true;
                    pushButton.textContent = disableText;
                    desc.textContent = disableDesc;
                    pushButton.disadbled = false;
                    if (subscription) {
                        console.log('EEE-3');
                        sendSubscriptionToServer(subscription);
                    }
                }).catch(function(err){
                    console.log('error subscribe: ' + err);
                });
            }
            if (subscription) {
                sendSubscriptionToServer(subscription);
            }
 
            pushButton.textContent = disableText;
            desc.textContent = disableDesc;
            isPushEnabled = true;
        })
        .catch(function(e) {
            console.log("Error during getSubscription()", e);
        });
    }).catch(function(){
        console.log('B');
    });
}

function sendSubscriptionToServer(subscription) {
    var temp = subscription.endpoint.split("/");
    var registration_id = temp[temp.length - 1];
    console.log(subscription);
    fetch(
        fetchUrl + '/set-gmc?gmc=' + registration_id,
            { method: "get" } 
    ).then(function(response) {
        console.log('send subscription to server');
        return response.json();
    }).catch(function(){
        console.log('set-gmc server error');
    });
}

function serviceWorkerCall() {
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("/service-worker.js").then(initialiseState).then(function(){console.log('call service-worker')});
    }else{
        console.warn("Service workers aren't supported in this browser.");
    }
}

document.addEventListener("DOMContentLoaded", function() {
    serviceWorkerCall();

});
