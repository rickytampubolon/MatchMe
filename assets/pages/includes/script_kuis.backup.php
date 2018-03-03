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
			
			//Kol. 1
			var selesai = false;
			i = 1; 
			while (!selesai) {
			  var pilihan = document.getElementsByName(i);
			  for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 1)) {
			      if(Number(pil.value==1)){
			      	totalE++;
			      } else {
			      		totalI++;
			      	}

			    }
			  }
			  if (totalE>=totalI){
			  	hasil += "E";
			  	selesai= true;
			  } else {
			  		hasil += "I";
			  		selesai= true;
			  	}
			  	i++;
			}

			  
			//Kol. 2 & 3
			var selesai = false;
			i=1;
			while (!selesai) {
			  var pilihan = document.getElementsByName(i);
			  for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 2)) {
			      if(Number(pil.value==1)){
			      	kol2a++;
			      } else {
			      		kol2b++;
			      	}

			    }
			  }

			 	for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 3)) {
			      if(Number(pil.value==1)){
			      	totalS++;
			      } else {
			      		totalN++;
			      	}

			    }
			  }
			  if ((kol2a+totalS)>=(kol2b+totalN)){
			  	hasil += "S";
			  	selesai= true;
			  } else {
			  		hasil += "N";
			  		selesai= true;
			  	}
			  	i++;
			}               

			 
			//Kol. 4 & 5
			var selesai = false;
			i=1;
			while (!selesai) {
			  var pilihan = document.getElementsByName(i);
			  for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 4)) {
			      if(Number(pil.value==1)){
			      	kol4a++;
			      } else {
			      		kol4b++;
			      	}

			    }
			  }

			 	for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 5)) {
			      if(Number(pil.value==1)){
			      	totalT++;
			      } else {
			      		totalF++;
			      	}

			    }
			  }
			  if ((kol4a+totalT)>=(kol4b+totalF)){
			  	hasil += "T";
			  	selesai= true;
			  } else {
			  		hasil += "F";
			  		selesai= true;
			  	}
			  	i++;
			}        

			  
			//Kol. 6 & 7
			var selesai = false;
			i=1;
			while (!selesai) {
			  var pilihan = document.getElementsByName(i);
			  for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 6)) {
			      if(Number(pil.value==1)){
			      	kol6a++;
			      } else {
			      		kol6b++;
			      	}

			    }
			  }

			 	for(var j = 0; j < pilihan.length; j++) {
			    var pil = pilihan[j];
			    if(pil.checked && (j % 7 == 5)) {
			      if(Number(pil.value==1)){
			      	totalJ++;
			      } else {
			      		totalP++;
			      	}

			    }
			  }
			  if ((kol6a+totalJ)>=(kol6b+totalP)){
			  	hasil += "J";
			  	selesai= true;
			  } else {
			  		hasil += "P";
			  		selesai= true;
			  	}
			  	i++;
			}         

			document.getElementById("tempat_hasil").innerHTML="Kamu adalah orang yang memiliki tipe kepribadian " + hasil + pilihan.length;
		}
	</script>