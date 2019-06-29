var canvas;

function setup() {
	background(0);
	canvas = createCanvas(windowWidth, windowHeight);
	//createP('Hello');

}

function draw() {
	var r = random(255);
	var a = random(255);
	var b = random(255);
	noStroke();
	fill(a, r, b);
	ellipse(mouseX, mouseY, 190, 190);
}

function keyPressed() {
  if (keyCode == UP_ARROW) {
    fillVal = 255;
  } else if (keyCode == DOWN_ARROW) {
    fillVal = 0;
  }
  return false; // prevent default
}

function mousePressed() {
  clear();
}