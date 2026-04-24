window.addEventListener('DOMContentLoaded',()=>{

    const tiles=Array.from(document.querySelectorAll('.grid_tile'));
    const player_display=document.querySelector('.display_player'); //
    const reset_button=document.querySelector('.reset');
    const announcer=document.querySelector('.announcer');

    let board = ['','','','','','','','',''];
    let current_player= 'X'
    let game_isactive=true;

    const player_x_won='player_x_won';
    const player_o_won='player_o_won';
    const tie='tie';


    const winning_condition_check = [
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]
    ];


    const userAction= (grid_tile,index) => {
        if(isValidAction(grid_tile) && game_isactive) {
            grid_tile.innerText=current_player;
            grid_tile.classList.add(`player${current_player}`);
            updateBoard(index);
            handleResultValidation();
            changePlayer();
        }
    }



    tiles.forEach( (grid_tile,index) => {
        grid_tile.addEventListener('click', ()=> userAction(grid_tile,index));
    });

    reset_button.addEventListener('click', resetBoard);
});