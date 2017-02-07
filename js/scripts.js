var on = false;
function toggleParallaxDebug(){
    if(on){
        on = false
    }else{
        on = true
        $(".parallax").css("transform","translate3d(700px, 0, -800px) rotateY(30deg);")
    }
}
