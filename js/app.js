if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    .then(function(reg){
        console.log("service worker registered: "+reg.scope);
    })
    .catch(function(error){
        console.log(error);
    });
}

var deferredprompt;
window.addEventListener("beforeinstallprompt", function(event){
    event.preventDefault();
    console.log("intercettato evento di installazione");
    deferredprompt=event;
    return false;
});
var buttons = document.querySelectorAll(".btn-primary");
for (var index; index<buttons.length; index++){
    buttons[index].addEventListener("click", function(event){
        event.preventDefault();
        if(deferredprompt){
            deferredprompt.prompt();
            deferredprompt.userChoice.then(
                function(choiceresult){
                    if(choiceresult.outcome === "dismissed"){
                        console.log("l'utente ha annullato l'installazione");
                    } else {
                        console.log("l'utente ha installato l'app");
                    }
                    window.location.href=event.target.getAttribute("href");
                })
            deferredprompt=null;
        }
    });
}