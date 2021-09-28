if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    .then(function(reg){
        console.log("service worker registered: "+reg.scope);
    })
    .catch(function(error){
        console.log(error);
    });
}

var deferredPrompt;
window.addEventListener("beforeinstallprompt", function(event){
    event.preventDefault();
    console.log("intercettato evento installazione");
    deferredPrompt = event;
    return false;
});

var btn = document.querySelectorAll(".btn");
for (var i = 0; i<btn.length; i++){
    btn[i].addEventListener("click", function(event){
        event.preventDefault();
        if(deferredPrompt){
            deferredPrompt.prompt();
            deferredPrompt.userChoice.then(function(choiceResult){
                if(choiceResult.outcome === "dismissed"){
                    console.log("nope");
                }
                else{
                    console.log("FUCKYEAH");
                }
                window.location.href= event.target.getAttribute(href);
            });
            deferredPrompt = null;
        } else {
            window.location.href= event.target.getAttribute(href);
        }
    });
}