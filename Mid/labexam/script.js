const display=document.getElementsByClassName('display');

const btns=Array.from(document.getElementsByClassName('buttons'));

btns.map(buttons => {
    buttons.addEventListener('click',(e)=> {
        // console.log('clicked');
        // console.log(e);
        // console.log(e.target);
        // console.log(e.target.innertext);

        switch(e.target.innerText) {
            case '=' :
                //display.innerText=eval(display.innerText);
                try{
                    display.innerText=eval(display.innerText);
                } catch {
                    display.innerText="Not possible";
                }


                break;

            default: // when hovered, color changes in button
                display.innerText += e.target.innerText;
        }
    });
});