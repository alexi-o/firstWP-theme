console.log('js running');
(function(){
    var cards = document.querySelectorAll(".card.effect_random");
    var timeMin = 90;
    var timeMax = 110;
    var timeOuts = [];

    for( var i = 0; i < cards.length; i++){
        var card = cards[i];
        console.log(card);
        var cardId = card.getAttribute("data-id");
        var id = "timeoutID" + cardId;
        var time = randomNum(timeMin, timeMax) * 100;
        cardsTimeout(id, time, card);
    }
    function cardsTimeout(id, time, card) {
        if(id in timeOuts) {
            clearTimeout(timeOuts[id]);
        }
        timeOuts[id] = setTimeout(function(){
            var c = card.classList;
            var newTime = randomNum(timeMin, timeMax) * 1000;
            c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
            cardsTimeout(id, time, card);
        }, time);
    }
    function randomNum(min, max) {
        return Math.random() * (max-min) + min;
    }
})();