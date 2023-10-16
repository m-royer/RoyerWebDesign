"use strict";

const canvas = document.getElementById('codebg');
const ctx = canvas.getContext('2d');

canvas.style.width = "100%";
canvas.style.height = "100%";


// Set font size and style
const fontSize = 11;

let canvasWidth = canvas.width;
let canvasHeight = canvas.height;
let columns = 0;
let matrix = [];
let minRowHeight = 50;
let maxRowHeight = 70;
let blinkingSteps = 40; // how many frames does the blink last (x2 because it has to brighten then dim)
let animating = false;



function randomBinary() {
	return Math.floor(Math.random() * 2)
}



// Define function to draw matrix-style characters
function drawCharacter(x, y, character, color) {
    ctx.fillStyle = color;
    ctx.fillText(character, x, y);
}



// returns correct color in sequence
function getBlinkColor(column,row) {
	let step = Math.ceil(matrix[column][row].step);
	let percent = 0;
	//matrix[column][row].step = step + 1;
	// reset
	if(step > blinkingSteps * 2) {
		matrix[column][row].step = 0;
		percent = 27;
	// start dimming
	}else if(step > blinkingSteps) {
		percent = 27 + (73 - (((step/2)/blinkingSteps) * 72));
	// brighten
	} else {
		percent = 27 + (step/blinkingSteps * 40);
	}
	return `hsl(120, 25%, ${percent}%)`;
}



// make it responsive
function updateMatrix() {
	columns = Math.floor(canvasWidth / fontSize) + 1;
	let rows = Math.floor(canvasHeight / fontSize) + 1;
	matrix = new Array(columns).fill(0);
	
	for(let col=0; col < columns; col++) {
		let rowHeight = Math.floor( (Math.random() * (maxRowHeight-minRowHeight)) +minRowHeight );
		let column = [];
		for(let i=0;i<rowHeight;i++) {
			let step = Math.floor(Math.random()*(blinkingSteps*2));
			let tempObj = {number: 0,step: step};
			tempObj.number = randomBinary();
			column.push(tempObj);
		}
		matrix[col] = column;
	}
}




function draw() {
	// responsive canvas needs this set every time
	canvas.width = canvas.offsetWidth;
	canvas.height = canvas.offsetHeight;
	
	if(canvas.width !== canvasWidth || canvas.height !== canvasHeight) {
		canvasWidth = canvas.width;
		canvasHeight = canvas.height;
		updateMatrix();
	}
	// Draw the matrix
	for(let c=0; c < matrix.length; c++) {
		for(let r=0; r < matrix[c].length; r++) {
			let color = getBlinkColor(c,r);
			drawCharacter(c * fontSize, r * fontSize, matrix[c][r].number, color);
		}
	}
	
	if(animating === true) 
		requestAnimationFrame(draw);
}

// Start the update loop
updateMatrix();
draw();