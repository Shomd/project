function set2(num){
	let i;
	if (num < 10){
		i = "0" + num;
	}else{
		i = num;
	}
	return i;
}

function showClock(){
	const nowDayTarget = document.getElementById("nowDay");
	const nowTimeTarget = document.getElementById("nowDate");

	const nowTime = new Date();



	const nowHour = set2(nowTime.getHours());
	const nowMin = set2(nowTime.getMinutes());
	const nowSec = set2(nowTime.getSeconds());

	nowDayTarget.innerHTML = nowTime.getMonth() + 1 + "/" + nowTime.getDate();
	nowTimeTarget.innerHTML = nowHour + ":" + nowMin + ":" + nowSec;
}

setInterval('showClock()',1000);
