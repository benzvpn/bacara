
var n = 1;
var type = "null";
var cp = 0;
var ct = 0;
var cb = 0;
var cTotal = 0;
var t = 0;
var pointPlay = 0;
var predictKey =1;
var getTurn = "null";
var thisTurn = 0;
var coutChooseTrue = 0;
var coutChooseFalse = 0;
var maxRound = 90;
// var pointBanker = 0;
// var pointTie = 0;
function clickPlayer() {
	$.ajax({
	  url: 'manually_update_credit.php',
	  type:'POST',
	  data: { id:id_member},
	  success: function(response){
	  	if (response <= 0) {
	  		$('#modalCredit').modal('show');
	  	} else {
	  		pointPlay += 2;


				cp += 1;
				cTotal +=1;
				$('#player').val(cp);
				$('#total').val(cp+ct+cb);
				$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
				$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-total').val(((cTotal/(cp+ct+cb))*100).toPrecision(4)+"%");


				if (type == "b" || type == "tb") {

					if (n < (maxRound+1)) {
						var img = document.createElement("img");

						img.src = "src/images/Blue.png";
						var src = document.getElementById('bc'+n);

						src.appendChild(img);

					}

					n += 1;
					// t = 1;
					type ="p";
					// return n;
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {



							$.ajax({
				        url: 'decrease_credit.php',
				        type: 'POST',
				        data: { id:id_member},
				        success: function(response){
							 	if (response <= 0 ) {
						      alert("กรุณาเติมเงิน");
						    }

				       }
				      });



							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});

							showTrue();

							$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#1034A6", "color": "#fff"});
							coutChooseTrue += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							showFalse();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseFalse += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						}
					}

				} else {



					if (n < (maxRound+1)) {
						var img = document.createElement("img");

						img.src = "src/images/Blue.png";
						var src = document.getElementById('bc'+n);

						src.appendChild(img);

					}

					n += 1;

					type ="p";
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {

						if (getBeforeType == type) {

							


							//blue
			          $.ajax({
			            url: 'decrease_credit.php',
			            type: 'POST',
			            data: { id:id_member},
			            success: function(response){
								 	

			           }
			          });


							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});

							showTrue();

							$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#1034A6", "color": "#fff"});
							coutChooseTrue += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							showFalse();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Player");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseFalse += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
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
					} else if (pointPlay%10 == 9 || pointPlay%10 == 4) {
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
				console.log(n);
				if (n > (maxRound+1)) {
					alert("สิ้นสุดกระดาน กรุณาเริ่มใหม่");
					MyRefresh();

				}

	  	}	  		
	 } 
	}); 



}

function clickTie() {
	// var audio = new Audio('media/coin-drop-5.mp3');
	// audio.play();
	$.ajax({
	  url: 'manually_update_credit.php',
	  type:'POST',
	  data: { id:id_member},
	  success: function(response){
	  	if (response <= 0) {
	  		$('#modalCredit').modal('show');
	  	} else {
	  		pointPlay += 1;

				ct +=1;
				cTotal +=1;
				$('#tie').val(ct);
				$('#total').val(cp+ct+cb);
				$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
				$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-total').val(((cTotal/(cp+ct+cb))*100).toPrecision(4)+"%");

				if (type == "p" ) {
					// t+=1;

					// if (t > 6) {
					// 	n = (n-(37*6))+1;
					// 	t = 1;
					// }

					// document.getElementById('bc'+n).style.background = '#4CBB17';

					if (n < (maxRound+1)) {
						var img = document.createElement("img");

						img.src = "src/images/Green.png";
						var src = document.getElementById('bc'+n);

						src.appendChild(img);

					}

					n += 1;

					type ="tp";
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {


							// n/a

							// $.ajax({
							// 	url: 'decrease_credit.php',
							// 	type: 'POST',
							// 	data: { id:id_member},
							// 	success: function(response){
							// 	//alert(response);
							//
							//  }
							// });


							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseTrue += 1;

								// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
							// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseFalse += 1;

							// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
							// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						}
					}

				} else if (type =="b"){
					// t+=1;

					// if (t > 6) {
					// 	n = (n-(37*6))+1;
					// 	t = 1;
					// }

					// document.getElementById('bc'+n).style.background = '#4CBB17';
					if (n < (maxRound+1)) {
						var img = document.createElement("img");

						img.src = "src/images/Green.png";
						var src = document.getElementById('bc'+n);

						src.appendChild(img);

					}


					n += 1;

					type ="tb";
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {

							// N/A
							// $.ajax({
							// 	url: 'decrease_credit.php',
							// 	type: 'POST',
							// 	data: { id:id_member},
							// 	success: function(response){
							// 	//alert(response);
							//
							//  }
							// });

							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseTrue += 1;

							// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
							// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseFalse += 1;

							// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
							// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						}
					}
				} else  {
					// t+=1;

					// if (t > 6) {
					// 	n = (n-(37*6))+1;
					// 	t = 1;
					// }

					// document.getElementById('bc'+n).style.background = '#4CBB17';
					if (n < (maxRound+1)) {
						var img = document.createElement("img");

						img.src = "src/images/Green.png";
						var src = document.getElementById('bc'+n);

						src.appendChild(img);

					}


					n += 1;
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {
							// red duplicate first
							// $.ajax({
							// 	url: 'decrease_credit.php',
							// 	type: 'POST',
							// 	data: { id:id_member},
							// 	success: function(response){
							// 	//alert(response);
							//
							//  }
							// });

							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseTrue += 1;

							// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
							// $('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Tie");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							// coutChooseFalse += 1;

							// $('#predict-num-true-total').val(coutChooseTrue);
							// $('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							// $('#predict-num-false-total').val(coutChooseFalse);
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
					} else if (pointPlay%10 == 9 || pointPlay%10 == 4) {
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
				if (n > (maxRound+1)) {
						alert("สิ้นสุดกระดาน กรุณาเริ่มใหม่");
						MyRefresh();

					}
				// console.log(n);
				// console.log(t);
				// console.log(type);
				// console.log(pointPlay);

	  	}	  		
	 } 
	}); 

	

}

function clickBanker() {
	// var audio = new Audio('media/coin-drop-5.mp3');
	// audio.play();
	$.ajax({
	  url: 'manually_update_credit.php',
	  type:'POST',
	  data: { id:id_member},
	  success: function(response){
	  	if (response <= 0) {
	  		$('#modalCredit').modal('show');
	  	} else {
	  		pointPlay += 3;

				cb +=1;
				cTotal +=1;
				$('#banker').val(cb);
				$('#total').val(cp+ct+cb);
				$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
				$('#sum-player').val(((cp/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-tie').val(((ct/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-banker').val(((cb/(cp+ct+cb))*100).toPrecision(4)+"%");
				$('#sum-total').val(((cTotal/(cp+ct+cb))*100).toPrecision(4)+"%");
				if (type == "p" || type == "tp") {
					// t+=1;

					// n = (n-(t*37))+1;
					// if (t > 6) {
					// 	n = (n-(37*6))+1;

					// }
					// document.getElementById('bc'+n).style.background = '#ED2939';
					if (n < (maxRound+1)) {
						var img = document.createElement("img");

					img.src = "src/images/Red.png";
					var src = document.getElementById('bc'+n);

					src.appendChild(img);

					}


					n += 1;
					type ="b";
					// t = 1;
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {

							// red important
							$.ajax({
								url: 'decrease_credit.php',
								type: 'POST',
								data: { id:id_member},
								success: function(response){
								//alert(response);

							 }
							});

							// $.ajax({
							// 	url: 'decrease_credit.php',
							// 	type: 'POST',
							// 	data: { id:id_member},
							// 	success: function(response){
							// 	//alert(response);
							//
							//  }
							// });

							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});

							showTrue();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseTrue += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							showFalse();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseFalse += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						}
					}
				} else {
					// t+=1;

					// if (t > 6) {
					// 	n = (n-(37*6))+1;
					// 	t = 1;
					// }
					// document.getElementById('bc'+n).style.background = '#ED2939';
					if (n < (maxRound+1)) {
						var img = document.createElement("img");

					img.src = "src/images/Red.png";
					var src = document.getElementById('bc'+n);

					src.appendChild(img);

					}

					n += 1;
					type ="b";
					thisTurn = cp+ct+cb;
					if (getTurn == thisTurn) {
						if (getBeforeType == type) {

							// red important
							$.ajax({
								url: 'decrease_credit.php',
								type: 'POST',
								data: { id:id_member},
								success: function(response){
								//alert(response);

							 }
							});


							$('#predict-check'+(predictKey-1)).val("สูตรถูก");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#4CBB17", "color": "#fff"});
							showTrue();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseTrue += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
							$('#predict-percent-false').val(((coutChooseFalse/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
						} else {
							$('#predict-check'+(predictKey-1)).val("สูตรผิด");
							$('#predict-check'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							showFalse();
							$('#predict-true-result'+(predictKey-1)).val("ผลออก Banker");
							$('#predict-true-result'+(predictKey-1)).css({"background-color": "#ED2939", "color": "#fff"});
							coutChooseFalse += 1;

							$('#predict-num-true-total').val(coutChooseTrue);
							$('#predict-percent-true').val(((coutChooseTrue/(coutChooseTrue+coutChooseFalse))*100).toPrecision(4)+"%");
							$('#predict-num-false-total').val(coutChooseFalse);
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
					} else if (pointPlay%10 == 9 || pointPlay%10 == 4) {
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
				if (n > (maxRound+1)) {
						alert("สิ้นสุดกระดาน กรุณาเริ่มใหม่");
						MyRefresh();

					}
			// console.log(n);
			// console.log(t);
			// console.log(type);
			// console.log(pointPlay);	

	  	}	  		
	 } 
	});


	
}
function showTrue () {
	var myVar = setInterval(myTimer, 1);
	setTimeout(myStopTimer, 1);
	var myVar1 = setInterval(myClear, 1000);
	setTimeout(myStopClear, 1000);
	function myTimer() {
	  $('#predict').css({"background-color": "#4CBB17", "color": "#fff"});
	  $('#predict').val("สูตรถูก");
	}
	function myClear() {
		$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
		$('#predict').val("รอสูตรคำนวนผล...");
	}
	function myStopTimer() {
	  clearInterval(myVar);
	}
	function myStopClear() {
	  clearInterval(myVar1);
	}
}

function showFalse () {
	var myVar = setInterval(myTimer, 1);
	setTimeout(myStopTimer, 1);
	var myVar1 = setInterval(myClear, 1000);
	setTimeout(myStopClear, 1000);
	function myTimer() {
	  $('#predict').css({"background-color": "#ED2939", "color": "#fff"});
	  $('#predict').val("สูตรผิด");
	}
	function myClear() {
		$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
		$('#predict').val("รอสูตรคำนวนผล...");
	}
	function myStopTimer() {
	  clearInterval(myVar);
	}
	function myStopClear() {
	  clearInterval(myVar1);
	}
}
function pleaseRefill() {
	$('#modalDate').modal('show');
}
function pleaseLogin() {

	$('#modalLogin').modal('show');
}

function clickRefresh() {
	MyRefresh();

}


function MyRefresh() {
	for(i=1;i<=maxRound;i++) {
		document.getElementById('bc'+i).style.background = '#bebdb8';

		document.getElementById('bc'+i).innerHTML = "";

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
	 cTotal = 0;
	$('#player').val(cp);
	$('#tie').val(ct);
	$('#banker').val(cb);
	$('#total').val(cp+ct+cb);
	$('#sum-total').val(0+"%");
	$('#round-play').val("ตาที่ "+((cp+ct+cb)+1));
	$('#sum-player').val(0+"%");
	$('#sum-tie').val(0+"%");
	$('#sum-banker').val(0+"%");
	$('#predict').val("รอสูตรคำนวนผล...");
	$('#predict').css({"background-color": "#E9ECEF","color": "#495057"});
	$('#predict-percent-true').val(0+"%");
	$('#predict-num-true-total').val(0);
	$('#predict-percent-false').val(0+"%");
	$('#predict-num-false-total').val(0);

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
