
var n = 1;
var type = "null";
var cp = 0;
var ct = 0;
var cb = 0;
var t = 0;
var pointPlay = 0;
var predictKey =1;
var getTurn = "null";
var thisTurn = 0;
var coutChooseTrue = 0;
var coutChooseFalse = 0;

// var pointBanker = 0;
// var pointTie = 0;
function clickPlayer() {
	var audio = new Audio('media/coin-drop-5.mp3');
	audio.play();
	// var audio = document.getElementById("audio-coin");
 //  audio.play();

	pointPlay += 2;
	

	cp += 1;
	$('#player').val(cp);
	$('#total').val(cp+ct+cb);
	$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
	$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
	// document.getElementById('bc'+n).style.background = '#1034A6';
	if (type == "b" || type == "tb") {
		// t+=1;
		
		n = (n-(t*37))+1;
		if (t > 6) {
			n = (n-(37*6))+1;	

		}
		// document.getElementById('bc'+n).style.background = '#1034A6';
		var img = document.createElement("img");
 
		img.src = "images/Blue.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);
		n += 37;
		t = 1;
		type ="p";
		// return n;
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#1034A6", "color": "#fff"});
				coutChooseTrue += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");	
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseFalse += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}

	} else {
		t+=1;
		
		if (t > 6) {
			n = (n-(37*6))+1;	
			t = 1;
		}

		// document.getElementById('bc'+n).style.background = '#1034A6';
		var img = document.createElement("img");
 
		img.src = "images/Blue.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);
		// var img = new Image();
		// var div = document.getElementById('bc'+n);
		 
		 
		// img.onload = function() {
		 
		//   div.innerHTML += '<img src="'+img.src+'" />'; 
		 
		// };
		 
		 
		// img.src = '../images/Blue.png';
		
		n += 37;
		type ="p";
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#1034A6", "color": "#fff"});
				coutChooseTrue += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseFalse += 1;

				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");

			}
		}
		// return t;

	}



	if (pointPlay > 10) {
		if (pointPlay%10 == 3 || pointPlay%10 == 8){
		$('#predict').val("กรุณาเลือก player");
		$('#predict').css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
		$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
		$('#predict-choose'+predictKey).val("เลือก player");
		$('#predict-choose'+predictKey).css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");

		getTurn = (cp+ct+cb)+1;
		getBeforeType = "p";

		predictKey +=1;	
		} else if (pointPlay%10 == 9 || pointPlay%10 == 2) {
			$('#predict').val("กรุณาเลือก Banker");
			$('#predict').css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
			$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
			$('#predict-choose'+predictKey).val("เลือก Banker");
			$('#predict-choose'+predictKey).css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");
			getTurn = (cp+ct+cb)+1;
			getBeforeType = "b";
			predictKey +=1;
		} else {
			
			$('#predict').val("รอสูตรคำนวนผล...");
			$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
		}
	}
	
	// console.log(n);
	// console.log(t);
	// console.log(type);
	// console.log(pointPlay);
}

function clickTie() {
	var audio = new Audio('media/coin-drop-5.mp3');
	audio.play();


	pointPlay += 1;

	ct +=1;
	$('#tie').val(ct);
	$('#total').val(cp+ct+cb);
	$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
	$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
	
	
	if (type == "p" ) {
		t+=1;
		
		if (t > 6) {
			n = (n-(37*6))+1;	
			t = 1;
		}

		// document.getElementById('bc'+n).style.background = '#4CBB17';
		var img = document.createElement("img");
 
		img.src = "images/Green.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);
		
		n += 37;

		type ="tp";
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseTrue += 1;
				
					// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");	
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseFalse += 1;
				
				// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}

	} else if (type =="b"){
		t+=1;
		
		if (t > 6) {
			n = (n-(37*6))+1;	
			t = 1;
		}

		// document.getElementById('bc'+n).style.background = '#4CBB17';
		var img = document.createElement("img");
 
		img.src = "images/Green.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);

		
		n += 37;

		type ="tb";
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseTrue += 1;
				
				// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");	
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseFalse += 1;
				
				// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}
	} else  {
		t+=1;
		
		if (t > 6) {
			n = (n-(37*6))+1;	
			t = 1;
		}

		// document.getElementById('bc'+n).style.background = '#4CBB17';
		var img = document.createElement("img");
 
		img.src = "images/Green.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);

		
		n += 37;
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseTrue += 1;
				
				// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");	
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				// coutChooseFalse += 1;
				
				// $('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				// $('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}

	}
	if (pointPlay > 10) {
		if (pointPlay%10 == 3 || pointPlay%10 == 8){
		$('#predict').val("กรุณาเลือก player");
		$('#predict').css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
		$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
		$('#predict-choose'+predictKey).val("เลือก player");
		$('#predict-choose'+predictKey).css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");

		getTurn = (cp+ct+cb)+1;
		getBeforeType = "p";

		predictKey +=1;	
		} else if (pointPlay%10 == 9 || pointPlay%10 == 2) {
			$('#predict').val("กรุณาเลือก Banker");
			$('#predict').css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
			$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
			$('#predict-choose'+predictKey).val("เลือก Banker");
			$('#predict-choose'+predictKey).css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");
			getTurn = (cp+ct+cb)+1;
			getBeforeType = "b";
			predictKey +=1;
		} else {
			
			$('#predict').val("รอสูตรคำนวนผล...");
			$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
		}
	}
	
	// console.log(n);
	// console.log(t);
	// console.log(type);
	// console.log(pointPlay);

}

function clickBanker() {
	var audio = new Audio('media/coin-drop-5.mp3');
	audio.play();



	pointPlay += 3;

	cb +=1;
	$('#banker').val(cb);
	$('#total').val(cp+ct+cb);
	$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
	$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
	$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
	if (type == "p" || type == "tp") {
		// t+=1;
		
		n = (n-(t*37))+1;
		if (t > 6) {
			n = (n-(37*6))+1;	

		}
		// document.getElementById('bc'+n).style.background = '#ED2939';
		var img = document.createElement("img");
 
		img.src = "images/Red.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);

		n += 37;
		type ="b";
		t = 1;
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseTrue += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseFalse += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}
	} else {
		t+=1;
		
		if (t > 6) {
			n = (n-(37*6))+1;	
			t = 1;
		}
		// document.getElementById('bc'+n).style.background = '#ED2939';
		var img = document.createElement("img");
 
		img.src = "images/Red.png";
		var src = document.getElementById('bc'+n);
		 
		src.appendChild(img);

		n += 37;
		type ="b";
		thisTurn = cp+ct+cb;
		if (getTurn == thisTurn) {
			if (getBeforeType == type) {
				$('#predict-check'+(predictKey-1)).val("สูตรถูก");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseTrue += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			} else {
				$('#predict-check'+(predictKey-1)).val("สูตรผิด");
				$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
				$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
				coutChooseFalse += 1;
				
				$('#predict-num-true-total').val(coutChooseTrue+"ครั้ง");
				$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
				$('#predict-num-false-total').val(coutChooseFalse+"ครั้ง");
				$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
			}
		}
	}


	if (pointPlay > 10) {
		if (pointPlay%10 == 3 || pointPlay%10 == 8){
		$('#predict').val("กรุณาเลือก player");
		$('#predict').css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
		$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
		$('#predict-choose'+predictKey).val("เลือก player");
		$('#predict-choose'+predictKey).css({"background-color": "#1034A6", "color": "#fff"});
		$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");

		getTurn = (cp+ct+cb)+1;
		getBeforeType = "p";

		predictKey +=1;	
		} else if (pointPlay%10 == 9 || pointPlay%10 == 2) {
			$('#predict').val("กรุณาเลือก Banker");
			$('#predict').css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-round'+predictKey).val("ตาที่ "+((cp+ct+cb)+1));
			$('#predict-round'+predictKey).css({"background-color": "#b0a06c", "color": "#fff"});
			$('#predict-choose'+predictKey).val("เลือก Banker");
			$('#predict-choose'+predictKey).css({"background-color": "#ED2939","color": "#fff"});
			$('#predict-check'+predictKey).val("รอสูตรคำนวนผล...");
			getTurn = (cp+ct+cb)+1;
			getBeforeType = "b";
			predictKey +=1;
		} else {
			
			$('#predict').val("รอสูตรคำนวนผล...");
			$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
		}
	}
// console.log(n);
// console.log(t);
// console.log(type);
// console.log(pointPlay);
}



function clickRefresh() {
	for(i=1;i<=222;i++) {
		document.getElementById('bc'+i).style.background = '#bebdb8';
		// $('#myDiv').remove();
		document.getElementById('bc'+i).innerHTML = ""; 
		// var image_x = document.getElementById('bc'+i);
		// image_x.parentNode.removeChild(image_x);
		// image_x.removeChild(image_x.childNodes[2]);
		// image_x.childNodes.removeChild(image_x);
		// var hold = $('td:first').clone().find('img').remove().end();
	}
	 n = 1;
	 type = "null";
	 cp = 0;
	 ct = 0;
	 cb = 0;
	 t = 0;
	 pointPlay = 0;
	 predictKey =1;
	 getTurn = "null";
	 thisTurn = 0;
	 coutChooseTrue = 0;
	 coutChooseFalse = 0;

	$('#player').val(cp);
	$('#tie').val(ct);
	$('#banker').val(cb);
	$('#total').val(cp+ct+cb);
	$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
	$('#sum-player').val(0+"%");
	$('#sum-tie').val(0+"%");
	$('#sum-banker').val(0+"%");
	$('#predict').val("รอสูตรคำนวนผล...");
	$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
	$('#predict-percent-true').val(0+"%");
	$('#predict-num-true-total').val(0+"ครั้ง");
	$('#predict-percent-false').val(0+"%");
	$('#predict-num-false-total').val(0+"ครั้ง");
	
	for (i=1;i<=30;i++) {
		$('#predict-round'+i).val("รอสูตรคำนวนผล...");
		$('#predict-round'+i).css({"background-color": "#E9ECEF","color": "#495057"});
		$('#predict-choose'+i).val("รอสูตรคำนวนผล...");
		$('#predict-choose'+i).css({"background-color": "#E9ECEF","color": "#495057"});
		$('#predict-true-result'+i).val("รอสูตรคำนวนผล...");
		$('#predict-true-result'+i).css({"background-color": "#E9ECEF","color": "#495057"});
		$('#predict-check'+i).val("รอสูตรคำนวนผล...");
		$('#predict-check'+i).css({"background-color": "#E9ECEF","color": "#495057"});
	}
	
}
$('.promotion-items').slick({
  dots: true,
  infinite: false,
  speed: 1000,
  slidesToShow: 6,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
