<script type="text/javascript">
		function handleClick() {         
			var totalE = 0, totalI = 0;
			var kol2a, kol2b;
			var totalS = 0, totalN = 0;
			var kol4a, kol4b;
			var totalT = 0, totalF = 0;
			var kol6a, kol6b;
			var totalJ = 0, totalP = 0;
			var hasil = ""; 
			var i;       
			
			var a = document.getElementsByName('A');
			var b = document.getElementsByName('B');

			//Kol 1
			for (i = 0; i < 70; i++){
				if (j % 7 == 1){
					if (a.checked){
						totalE++;
					} else if (b.checked){
						totalI++;
					}
				}
			}
			if (totalE>=totalI){
					hasil+="E";
				} else hasil+="I";

			//Kol 2 & 3
			for (i = 0; i < 70; i++){
				if (j % 7 == 2){
					if (a.checked){
						kol2a++;
					} else if (b.checked){
						kol6b++;
					}
				}

				if (j % 7 == 3){
					if (a.checked){
						totalS++;
					} else if (b.checked){
						totalN++;
					}
				}
			}
			if ((kol2a+totalS)>=(kol2b+totalN)){
					hasil+="S";
				} else hasil+="N";

			//Kol 4 & 5
			for (i = 0; i < 70; i++){
				if (j % 7 == 4){
					if (a.checked){
						kol4a++;
					} else if (b.checked){
						kol4b++;
					}
				}

				if (j % 7 == 5){
					if (a.checked){
						totalT++;
					} else if (b.checked){
						totalF++;
					}
				}
			}
			if ((kol4a+totalT)>=(kol4b+totalF)){
					hasil+="T";
				} else hasil+="F";

			//Kol 6 & 7
			for (i = 0; i < 70; i++){
				if (j % 7 == 6){
					if (a.checked){
						kol6a++;
					} else if (b.checked){
						kol6b++;
					}
				}

				if (j % 7 == 0){
					if (a.checked){
						totalJ++;
					} else if (b.checked){
						totalP++;
					}
				}
			}
			if ((kol6a+totalJ)>=(kol6b+totalP)){
					hasil+="J";
				} else hasil+="P";

			document.getElementById("tempat_hasil").innerHTML="Kamu adalah orang yang memiliki tipe kepribadian " + hasil;
		}
	</script>