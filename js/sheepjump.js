/**
 * Created by tomwilkins on 21/06/2014.
 */

var width = 320,                        // the width of the canvas
    height = 500,                       // height of the canvas
    score = 0,                         // game points
    state = true,                       // game is running
    started = false,
    gLoop,                              // the game loop
    c = document.getElementById("c"),   // the canvas
    ctx = c.getContext("2d");           // 2d graphic context of the canvas

// set the canvas size
c.width = width;
c.height = height;

// is it NOT possible to move objects in canvas surface
// a CLEAR method is required to clear the canvas
var clear = function(){

    // set active colour
    ctx.fillStyle = '#d0e7f9';

    ctx.clearRect(0, 0, width, height);

    // start drawing -- * similar to drawing in openGL
    ctx.beginPath();

        // draw rectangle covering whole canvas
        ctx.rect(0,0,width,height);

    // finish drawing
    ctx.closePath();

    // fill rectangle with active colour
    ctx.fill();

};

var howManyCircles =10,
    circles=[];

// creates circles
for (var i=0; i< howManyCircles; i++){

    // adds info to circles array
    circles.push([Math.random() * width,    // x pos
        Math.random() * height,             // y pos
        Math.random() * 100,                // radius
        Math.random() /2]);                 // transparency
}

// function that actually draws the circles
var DrawCircles = function(){

    // draws the circles
    for (var i=0; i<howManyCircles; i++){

        // sets active colour
        ctx.fillStyle=  'rgba(255, 255, 255, ' + circles[i][3] + ')';

        // start drawing
        ctx.beginPath();

            // arc (x, y, radius, startAngle, endAngle, anticlockwise)
            ctx.arc(circles[i][0], circles[i][1], circles[i][2], 0, Math.PI * 2, true);

        // end drawing
        ctx.closePath();

        // fills with active colour
        ctx.fill();
    }
};

// function that allows the circles to move
var MoveCircles = function(deltaY){

    for (var i = 0; i < howManyCircles; i++) {

        // if the circle has moved beyond the height of the canvas
        // draw it from the top
        if (circles[i][1] - circles[i][2] > height) {
            circles[i][0] = Math.random() * width;
            circles[i][2] = Math.random() * 100;
            circles[i][1] = 0 - circles[i][2];
            circles[i][3] = Math.random() / 2;
        } else {
            // move circle deltaY pixels down
            circles[i][1] += deltaY;
        }
    }
};

// creates a new player
var player = new (function(){


    var that = this;    // changes context to that

    that.image = new Image();   // creates new image

    that.image.src = "images/sheepleft.png" // sets image
    that.width = 65;
    that.height = 65;
    that.frames = 1;
    that.actualFrame = 0;
    that.X = 0;
    that.Y = 0;
    that.isJumping = false;
    that.isFalling = false;
    that.jumpSpeed =0;
    that.fallSpeed =0;

    that.moveLeft = function(){
        that.image.src = "images/sheepleft.png" // sets image
        if (that.X > 0){
            that.setPosition(that.X -5, that.Y);
        }
    }

    that.moveRight = function(){
        that.image.src = "images/sheepright.png" // sets image
        if (that.X + that.width < width){
            that.setPosition(that.X + 5, that.Y);
        }
    }

    that.moveLeftKey = function(){
        that.image.src = "images/sheepleft.png" // sets image
        if (that.X > 0){
            that.setPosition(that.X -20, that.Y);
        }
    }

    that.moveRightKey = function(){
        that.image.src = "images/sheepright.png" // sets image
        if (that.X + that.width < width){
            that.setPosition(that.X + 20, that.Y);
        }
    }

    that.jump=function(){

        // if not jumping or falling, jump
        if (!that.isJumping && !that.isFalling){
            that.fallSpeed =0;
            that.isJumping=true;
            that.jumpSpeed=17;
        }
    }

    that.checkJump = function(){

        // if player is under about half, let him move
        if (that.Y > height * 0.4){
            // uses jump speed to move player
            that.setPosition(that.X, that.Y-that.jumpSpeed);

        }else{ // move everything else

            if (that.jumpSpeed > 10) score++;

            // move clouds at half speed - give apearence of distance
            MoveCircles(that.jumpSpeed * 0.5);

            // moves all plat forms
            platforms.forEach(function(platform, ind){

                platform.y += that.jumpSpeed; // move platform

                //if platform moves outside the screen, we will generate another one on the top
                if (platform.y > height) {

                    var type = ~~(Math.random() * 5);
                    if (type == 0)
                        type = 1;
                    else
                        type = 0;
                    platforms[ind] = new Platform(Math.random() * (width - platformWidth), platform.y - height, type);
                }
            });
        }

        // decreases speed to simulate gravity
        that.jumpSpeed--;

        if (that.jumpSpeed == 0){
            // start to fall
            that.isJumping = false;
            that.isFalling = true;
            that.fallSpeed =1;
        }
    }

    that.checkFall = function(){

        if (that.Y < height - that.height){
            that.setPosition(that.X, that.Y + that.fallSpeed);
            that.fallSpeed++;
        }else{
            if (score == 0){
                that.fallStop();
            }else{
                GameOver();
            }
        }
    }

    that.fallStop = function(){
        that.isFalling = false;
        that.fallSpeed =0;
        that.jump();
    }

    // setter method
    that.setPosition = function(x, y){
        that.X = x;
        that.Y = y;
    }

    that.interval = 0;

    // drawing method
    that.draw = function(){
        try {
            ctx.drawImage(that.image, 0, that.height * that.actualFrame, that.width, that.height, that.X, that.Y, that.width, that.height);
        }
        catch (e) {
            // if there is an error it is caught rather than crashing program
        };

        /*
        // changes frame every 4 loops to create animation
        if (that.interval == 4 ) {
            if (that.actualFrame == that.frames) {
                that.actualFrame = 0;
            }
            else {
                that.actualFrame++;
            }
            that.interval = 0;
        }
        that.interval++;
        */
    }
})();

// platform class
var Platform = function (x, y, type){
    var that = this;

    // normal platform
    that.firstColor = '#FF8C00';
    that.secondColor = '#EEEE00';
    that.onCollide = function(){
        player.fallStop();
    };

    // super platform
    if (type ===1){
        that.firstColor = '#AADD00';
        that.secondColor = '#698B22';
        that.onCollide = function(){
            player.fallStop();
            player.jumpSpeed = 50;
        };
    }

    that.x = ~~x;
    that.y = y;
    that.type = type;
    that.isMoving = ~~(Math.random()*2); // if platform is allowed to move
    that.direction = ~~(Math.random()*2) ? -1 : 1; // which direction

    that.draw = function(){
        ctx.fillStyle = 'rgba(255, 255, 255, 1)';

        // add gradient to platforms
        var gradient = ctx.createRadialGradient(that.x + (platformWidth/2),
            that.y + (platformHeight/2), 5, that.x + (platformWidth/2),
            that.y + (platformHeight/2), 45);

        gradient.addColorStop(0, that.firstColor);
        gradient.addColorStop(1, that.secondColor);
        ctx.fillStyle = gradient;
        ctx.fillRect(that.x, that.y, platformWidth, platformHeight);
    };


    return that;
};

var nrOfPlatforms = 7,
    platforms =[],
    platformWidth = 70,
    platformHeight = 20;

var generatePlatforms = function(){
    var position = 0, // y pos
        type;

    for (var i=0; i< nrOfPlatforms; i++){

        // 5 in 1 chance of it being a super platform
        type = ~~(Math.random()*5);
        if (type == 0) type = 1;
        else type = 0;

        platforms[i] = new Platform(Math.random()*(width-platformWidth), // randomly on x
                                    position, // top of canvas
                                    type);

        if (position < height - platformHeight){
            position += ~~(height / nrOfPlatforms);
        }
    }
}(); // call function to generate platforms


// check for collision between player and platforms
var checkCollision = function(){
    // check each platform
    platforms.forEach(function(e, ind){
        if (
            (player.isFalling) && // player is falling
            (player.X < e.x + platformWidth) && // player is over platform
            (player.X + player.width > e.x) &&
            (player.Y + player.height > e.y) &&
            (player.Y + player.height < e.y + platformHeight)
            ) {
            e.onCollide();
        }
    })
}

// moves player left and right using arrow keys
document.onkeydown = function(e){

    if (e.keyCode) keycode=e.keyCode;
    else keycode=e.which;
    ch=String.fromCharCode(keycode);

    if(keycode==37) player.moveLeftKey();
    else if (keycode==39) player.moveRightKey();
    else if (!started && keycode == 13) { started = true; GameLoop(); }
    else if (!state && keycode == 13){
        player.setPosition(~~((width-player.width)/2),  ~~((height - player.height)/2));
        player.jump();
        state = true;
        score = 0;
        GameLoop();
    } // re starts the game
}

// moves player left and right using key press -> for keyboard keys
document.onkeypress = function(e){

    if (e.keyCode) keycode=e.keyCode;
    else keycode=e.which;
    ch=String.fromCharCode(keycode);

    if(ch=='a') player.moveLeftKey();
    else if (ch=='d') player.moveRightKey();

}

// moves the player using the mouse
c.onmousemove = function(e){
    var l = $('#c').offset();
    if (player.X + $('#c').offset().left > e.pageX){
        player.moveLeft();
    }else if (player.X + $('#c').offset().left < e.pageX){
        player.moveRight();
    }
}

c.onclick = function(e){
    if (player.X + c.offsetLeft > e.pageX){
        player.moveLeft();
    }else if (player.X + c.offsetLeft < e.pageX){
        player.moveRight();
    }
    if (!started){
        started = true;
        GameLoop();
    }
    if (!state){
        player.setPosition(~~((width-player.width)/2),  ~~((height - player.height)/2));
        player.jump();
        state = true;
        score = 0;
        GameLoop();
    } // re starts the game
}

// sets the player to the middle of the canvas
// ~~ returns nearest lower integer of given float
player.setPosition(~~((width-player.width)/2),  ~~((height - player.height)/2));

// initiate the first jump
player.jump();

// the overall game loop
var GameLoop = function(){
    clear();        // clears the canvas and draws a blue rectangle
    //MoveCircles(5); // moves the created circles by 5 pixels
    DrawCircles();  // draws the moved circles
    if (player.isJumping) player.checkJump();
    if (player.isFalling) player.checkFall();


    player.draw(); // draws the player

    // draws each platform
    platforms.forEach(function(platform, index){

        if (platform.isMoving) {//if platform is able to move
            if (platform.x < 0) {//and if is on the end of the screen
                platform.direction = 1;
            } else if (platform.x > width - platformWidth) {//switch direction and start moving in the opposite direction
                platform.direction = -1;
            }

            platform.x += platform.direction * (index / 2) * ~~(score / 100);
//with speed dependent on the index in platforms[] array (to avoid moving all the displayed platforms with the same speed, it looks ugly) and number of points
        }
        platform.draw();
    });

    checkCollision();


    // change active colour to black
    ctx.fillStyle = "Black";
    ctx.font = "10pt Arial";
    // write output
    ctx.fillText("Score: " + score, 10, height-10);

    // if game is running/ player alive load next frame
    if (state){
        gLoop = setTimeout(GameLoop, 1000/50); // recursively calls the game loop
    }
};


// game over screen
var GameOver = function(){
    state = false;
    clearTimeout(gLoop);

    if (score > 0){
        $("#highscoreForm").show();
        $("#score").html(score);
        $("#scoretwo").val(score);
    }

    if (!state){
        // render game over text frame
        setTimeout(function(){
            clear();
            ctx.fillStyle = "Black";
            ctx.font = "20pt Arial";
            ctx.fillText("GAME OVER", width / 2 - 120, height / 2 - 50);
            ctx.fillText("SCORE: " + score, width / 2 - 120, height / 2);
            ctx.fillText("Press enter/ click or", width / 2 - 120, height / 2+ 100 );
            ctx.fillText("touch to start again!", width / 2 - 120, height / 2 + 130 );
        }, 100);
    }
};

clear();
ctx.fillStyle = "Black";
ctx.font = "20pt Arial";
ctx.fillText("Press enter/ click or", width / 2 - 120, height / 2 );
ctx.fillText("touch to start!", width / 2 - 120, height / 2 + 30 );


// starts the game
// GameLoop();
