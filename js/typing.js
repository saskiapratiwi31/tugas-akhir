window.onload = function(){
    let txt = $('.slogan').text();
    $('.slogan').html("");
    let time = [];
    let speed = 50;
    

    for(let i=0;i<txt.length;i++){
        time.push(speed);
        speed+=50;
    }

    for(let i=0;i<txt.length;i++){
        typing(i,time[i]);
    }


    function typing(i,time){
        setTimeout(()=>{
            document.getElementById("slogan").innerHTML += txt.charAt(i);
        },time);
    }

}