const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav1 = document.querySelector('.ul');
	const navLinks = document.querySelectorAll('.linkuri-nav');
	burger.addEventListener('click', ()=>{
		nav1.classList.toggle('nav-active');

		navLinks.forEach((link, index)=>{
			if(link.style.animation){
				link.style.animation ='';
			}
			else{
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
			}
		});
		burger.classList.toggle('toggle');
	});
}
navSlide();
// if( document.querySelector('.burger').classList.contains('toggle')){
	const body = document.body;
	let lastScroll = 0;
window.addEventListener("scroll", () => {

	const currentScroll = window.pageYOffset;
	if (currentScroll <= 0) {
		body.classList.remove("scroll-up");
		return;
	}

	if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
		body.classList.remove("scroll-up");
		body.classList.add("scroll-down");
	} else if (
		currentScroll < lastScroll &&
		body.classList.contains("scroll-down")
	) {
		body.classList.remove("scroll-down");
		body.classList.add("scroll-up");
	}
		lastScroll = currentScroll;
	
	});
//}

//La inceput animatia
function toNonActive(){
    document.querySelector(".first").classList.add("nonactive");
}
window.addEventListener("DOMContentLoaded",function(){
      setTimeout(toNonActive,1800);
});

  function preventScroll(e){
    e.preventDefault();
    e.stopPropagation();

    return false;
}

function addListenerMulti(element, eventNames, listener) {
    var events = eventNames.split(' ');
    for (var i=0, iLen=events.length; i<iLen; i++) {
      element.addEventListener(events[i], listener, false);
    }
  }

	var sPath = window.location.pathname;
	var sPath = sPath.substring(sPath.lastIndexOf('/') + 1);

	if(sPath == 'Support.html'){
		function initMap() {
			// The location of Uluru
			const uluru = { lat: 46.98540438147725, lng: 28.87041512636892};
			// The map, centered at Uluru
			const map = new google.maps.Map(document.getElementById("map"), {
			  zoom: 4,
			  center: uluru,
			});
			// The marker, positioned at Uluru
			const marker = new google.maps.Marker({
			  position: uluru,
			  map: map,
			});
		  }
		  
		  window.initMap = initMap;
		}

	if(sPath == 'iPhone.html'){
		document.querySelector('.btn-buy-iphone13pro').addEventListener('click',function() {
			localStorage.setItem("iPhone13Pro", `url("assets/iPhone13/iphone-13-pro-family.png")`);
		});
		document.querySelector('.btn-buy-iphone13').addEventListener('click',function() {
			localStorage.setItem("iPhone13", `url("assets/iphone13-2cam/iphone-13-green-select.png")`);
		});
		document.querySelector('.btn-buy-iphoneSE').addEventListener('click',function() {
			localStorage.setItem("iPhoneSE", `url("assets/iphoneSE/iphone-se-midnight-select.png")`);
		});
		document.querySelector('.btn-buy-iphone12').addEventListener('click',function() {
			localStorage.setItem("iPhone12", `url("assets/iPhone12/iphone-12-green-select.png")`);
		});
		document.querySelector('.btn-buy-iphone11').addEventListener('click',function() {
			localStorage.setItem("iPhone11", `url("assets/iPhone11/iphone11-green-select.png")`);
		});

		document.querySelector('.btn-learn-iphone13pro').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "24");})
		document.querySelector('.btn-learn-iphone13').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "25");})
		document.querySelector('.btn-learn-iphoneSE').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "1");})
		document.querySelector('.btn-learn-iphone12').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "2");})
		document.querySelector('.btn-learn-iphone11').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "3");})
	}
	if(sPath == 'iPad.html'){
		document.querySelector('.btn-buy-iPadAir').addEventListener('click',function() {
			localStorage.setItem("iPadAir", `url("assets/iPadAir/ipad-air-select-wifi-purple.png")`);
		});
		document.querySelector('.btn-buy-iPadPro').addEventListener('click',function() {
			localStorage.setItem("iPadPro", `url("assets/iPadPro/ipad-pro-11-select-cell-silver.png")`);
		});
		document.querySelector('.btn-buy-iPad').addEventListener('click',function() {
			localStorage.setItem("iPad", `url("assets/iPad/ipad-2021-hero-silver-wifi.png")`);
		});
		document.querySelector('.btn-buy-iPadMini').addEventListener('click',function() {
			localStorage.setItem("iPadMini", `url("assets/iPadMini/ipad-mini-select-wifi-purple-202109.png")`);
		});

		document.querySelector('.btn-learn-iPadAir').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "4");})
		document.querySelector('.btn-learn-iPadPro').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "5");})
		document.querySelector('.btn-learn-iPad').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "6");})
		document.querySelector('.btn-learn-iPadMini').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "7");})
	}
	if(sPath == 'Xiaomi.html'){
		document.querySelector('.btn-buy-Xiaomi12Pro').addEventListener('click',function() {
			localStorage.setItem("Xiaomi12Pro", `url("assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png")`);
		});
		document.querySelector('.btn-buy-Xiaomi12').addEventListener('click',function() {
			localStorage.setItem("Xiaomi12", `url("assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png")`);
		});
		document.querySelector('.btn-buy-Xiaomi11liteNE').addEventListener('click',function() {
			localStorage.setItem("Xiaomi11liteNE", `url("assets/Xiaomi11liteNE/white.png")`);
		});
		document.querySelector('.btn-buy-Redmi10').addEventListener('click',function() {
			localStorage.setItem("Redmi10", `url("assets/Redmi10/black.png")`);
		});

		document.querySelector('.btn-learn-Xiaomi12Pro').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "8");})
		document.querySelector('.btn-learn-Xiaomi12').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "9");})
		document.querySelector('.btn-learn-Xiaomi11liteNE').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "10");})
		document.querySelector('.btn-learn-Redmi10').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "11");})
	}
	if(sPath == 'Samsung.html'){
		document.querySelector('.btn-buy-GalaxyFold3').addEventListener('click',function() {
			localStorage.setItem("GalaxyFold3", `url("assets/GalaxyFold3/green.png")`);
		});
		document.querySelector('.btn-buy-GalaxyS22Ultra').addEventListener('click',function() {
			localStorage.setItem("GalaxyS22Ultra", `url("assets/GalaxyS22Ultra/purple.png")`);
		});
		document.querySelector('.btn-buy-GalaxyS21').addEventListener('click',function() {
			localStorage.setItem("GalaxyS21", `url("assets/GalaxyS21/purple-orange.png")`);
		});

		document.querySelector('.btn-learn-GalaxyFold3').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "12");})
		document.querySelector('.btn-learn-GalaxyS22Ultra').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "13");})
		document.querySelector('.btn-learn-GalaxyS21').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "14");})
	}
	if(sPath == 'Huawei.html'){
		document.querySelector('.btn-buy-HuaweiP50Pocket').addEventListener('click',function() {
			localStorage.setItem("HuaweiP50Pocket", `url("assets/HuaweiP50Pocket/gold.png")`);
		});
		document.querySelector('.btn-buy-HuaweiNova9').addEventListener('click',function() {
			localStorage.setItem("HuaweiNova9", `url("assets/HuaweiNova9/blue.png")`);
		});
		document.querySelector('.btn-buy-HuaweiP30Pro').addEventListener('click',function() {
			localStorage.setItem("HuaweiP30Pro", `url("assets/HuaweiP30Pro/blue.png")`);
		});

		document.querySelector('.btn-learn-HuaweiP50Pocket').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "15");})
		document.querySelector('.btn-learn-HuaweiNova9').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "16");})
		document.querySelector('.btn-learn-HuaweiP30Pro').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "17");})
	}
	if(sPath == 'Samsung-tab.html'){
		document.querySelector('.btn-buy-GalaxyTabS8Ultra').addEventListener('click',function() {
			localStorage.setItem("GalaxyTabS8Ultra", `url("assets/GalaxyTabS8Ultra/graphite.png")`);
		});
		document.querySelector('.btn-buy-GalaxyTabA7Lite').addEventListener('click',function() {
			localStorage.setItem("GalaxyTabA7Lite", `url("assets/GalaxyTabA7Lite/white.png")`);
		});
		document.querySelector('.btn-buy-GalaxyTabS6Lite').addEventListener('click',function() {
			localStorage.setItem("GalaxyTabS6Lite", `url("assets/GalaxyTabS6Lite/blue.png")`);
		});

		document.querySelector('.btn-learn-GalaxyTabS8Ultra').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "18");})
		document.querySelector('.btn-learn-GalaxyTabA7Lite').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "19");})
		document.querySelector('.btn-learn-GalaxyTabS6Lite').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "20");})
	}
	if(sPath == 'Huawei-tab.html'){
		document.querySelector('.btn-buy-HuaweiMatePadPro').addEventListener('click',function() {
			localStorage.setItem("HuaweiMatePadPro", `url("assets/HuaweiMatePadPro/green.png")`);
		});
		document.querySelector('.btn-buy-HuaweiMatePad11').addEventListener('click',function() {
			localStorage.setItem("HuaweiMatePad11", `url("assets/HuaweiMatePad11/green.png")`);
		});
		document.querySelector('.btn-buy-HuaweiMatePaper').addEventListener('click',function() {
			localStorage.setItem("HuaweiMatePadPaper", `url("assets/HuaweiMatePadPaper/black.png")`);
		});

		document.querySelector('.btn-learn-HuaweiMatePadPro').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "21");})
		document.querySelector('.btn-learn-HuaweiMatePad11').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "22");})
		document.querySelector('.btn-learn-HuaweiMatePaper').addEventListener('click', function(){
			localStorage.setItem("for-changeable-page", "23");})
	}
	if(sPath == 'Cart.html'){
		function adaug_prod(Denumirea,src,pret,n,local_storage){
			let section = `
			<div class="produs-cart">
			<img class="prod-cart-image" src="${src}">
			<p class="prod-cart-text">${Denumirea}</p>
			<div class="btn-plus-minus">
				<p class="prod-cart-text minus minus-${n}">-</p>
				<p class="prod-cart-text cantitatea-${n}">1</p>
				<p class="prod-cart-text plus plus-${n}">+</p>
			</div>
			<p class="prod-cart-text prod-cart-price">Price $${pret}</p>
			<img class="prod-cart-trash" src="assets/trash.png">
			</div>`
			document.querySelector('.sect-produse').insertAdjacentHTML('afterbegin',section);

			document.querySelectorAll('.prod-cart-trash').forEach(e => e.addEventListener('click',function(){
				localStorage.removeItem(`${local_storage}`);
				e.parentElement.remove();
			}))
			document.querySelector(`.minus-${n}`).addEventListener('click', function(){
				var valoarea_cantitatii = parseInt(document.querySelector(`.cantitatea-${n}`).textContent);
				if(valoarea_cantitatii != 0 ){
					document.querySelector(`.cantitatea-${n}`).textContent = valoarea_cantitatii - 1;
				}
			});
			document.querySelector(`.plus-${n}`).addEventListener('click', function(){
				var valoarea_cantitatii = parseInt(document.querySelector(`.cantitatea-${n}`).textContent);
				document.querySelector(`.cantitatea-${n}`).textContent = valoarea_cantitatii + 1;
			})
		}

		function add_image(nume){
			return JSON.parse(localStorage.getItem(nume).substring(4, localStorage.getItem(nume).length-1));
		}

			if(localStorage.getItem("iPhone13Pro") !== null) {
				adaug_prod('iPhone 13 Pro Max',add_image('iPhone13Pro'),'899','iphone13pro','iPhone_13_Pro');
			}
	
			if(localStorage.getItem("iPhone13") !== null) {
				adaug_prod('iPhone 13',add_image('iPhone13'),'629','iphone13','iPhone_13');
			}
	
			if(localStorage.getItem("iPhoneSE") !== null) {
				adaug_prod('iPhone SE',add_image('iPhoneSE'),'386','iPhoneSE','iPhone_SE');
			}
			if(localStorage.getItem("iPhone12") !== null) {
				adaug_prod('iPhone 12',add_image('iPhone12'),'539','iphone12','iPhone_12');
			}
			if(localStorage.getItem("iPhone11") !== null) {
				adaug_prod('iPhone 11',add_image('iPhone11'),'449','iphone11','iPhone_11');
			}
			if(localStorage.getItem("iPadAir") !== null) {
				adaug_prod('iPad Air',add_image('iPadAir'),'539','iPadAir','iPadAir');
			}
			if(localStorage.getItem("iPadPro") !== null) {
				adaug_prod('iPad Pro',add_image('iPadPro'),'719','iPadPro','iPadPro');
			}
			if(localStorage.getItem("iPad") !== null) {
				adaug_prod('iPad',add_image('iPad'),'296','iPad','iPad');
			}
			if(localStorage.getItem("iPadMini") !== null) {
				adaug_prod('iPad Mini',add_image('iPadMini'),'449','iPadMini','iPadMini');
			}
			if(localStorage.getItem("Xiaomi12Pro") !== null) {
				adaug_prod('Xiaomi 12 Pro',add_image('Xiaomi12Pro'),'945','Xiaomi12Pro','Xiaomi12Pro');
			}
			if(localStorage.getItem("Xiaomi12") !== null) {
				adaug_prod('Xiaomi 12',add_image('Xiaomi12'),'783','Xiaomi12','Xiaomi12');
			}
			if(localStorage.getItem("Xiaomi11liteNE") !== null) {
				adaug_prod('Xiaomi 11 lite NE',add_image('Xiaomi11liteNE'),'333','Xiaomi11liteNE','Xiaomi11liteNE');
			}
			if(localStorage.getItem("Redmi10") !== null) {
				adaug_prod('Redmi 10',add_image('Redmi10'),'180','Redmi10','Redmi10');
			}
			if(localStorage.getItem("GalaxyFold3") !== null) {
				adaug_prod('Galaxy Fold 3',add_image('GalaxyFold3'),'1980','GalaxyFold3','GalaxyFold3');
			}
			if(localStorage.getItem("GalaxyS22Ultra") !== null) {
				adaug_prod('Galaxy S22 Ultra',add_image('GalaxyS22Ultra'),'1260','GalaxyS22Ultra','GalaxyS22Ultra');
			}
			if(localStorage.getItem("GalaxyS21") !== null) {
				adaug_prod('Galaxy S21',add_image('GalaxyS21'),'900','GalaxyS21','GalaxyS21');
			}
			if(localStorage.getItem("HuaweiP50Pocket") !== null) {
				adaug_prod('Huawei P50 Pocket',add_image('HuaweiP50Pocket'),'1395','HuaweiP50Pocket','HuaweiP50Pocket');
			}
			if(localStorage.getItem("HuaweiNova9") !== null) {
				adaug_prod('Huawei Nova 9',add_image('HuaweiNova9'),'585','HuaweiNova9','HuaweiNova9');
			}
			if(localStorage.getItem("HuaweiP30Pro") !== null) {
				adaug_prod('Huawei P30 Pro',add_image('HuaweiP30Pro'),'720','HuaweiP30Pro','HuaweiP30Pro');
			}
			if(localStorage.getItem("GalaxyTabS8Ultra") !== null) {
				adaug_prod('Galaxy Tab S8 Ultra',add_image('GalaxyTabS8Ultra'),'1440','GalaxyTabS8Ultra','GalaxyTabS8Ultra');
			}
			if(localStorage.getItem("GalaxyTabA7Lite") !== null) {
				adaug_prod('Galaxy Tab A7 Lite',add_image('GalaxyTabA7Lite'),'225','GalaxyTabA7Lite','GalaxyTabA7Lite');
			}
			if(localStorage.getItem("GalaxyTabS6Lite") !== null) {
				adaug_prod('Galaxy Tab S6 Lite',add_image('GalaxyTabS6Lite'),'360','GalaxyTabS6Lite','GalaxyTabS6Lite');
			}
			if(localStorage.getItem("HuaweiMatePadPro") !== null) {
				adaug_prod('Huawei Mate Pad Pro',add_image('HuaweiMatePadPro'),'540','HuaweiMatePadPro','HuaweiMatePadPro');
			}
			if(localStorage.getItem("HuaweiMatePad11") !== null) {
				adaug_prod('Huawei Mate Pad 11',add_image('HuaweiMatePad11'),'423','HuaweiMatePad11','HuaweiMatePad11');
			}
			if(localStorage.getItem("HuaweiMatePadPaper") !== null) {
				adaug_prod('Huawei MatePad Paper',add_image('HuaweiMatePadPaper'),'720','HuaweiMatePaper','HuaweiMatePaper');
			}
		
			addListenerMulti(window, 'click DOMContentLoaded', function(){
				let parent = document.querySelectorAll('.produs-cart');
				let suma = 0;
				for(let i = 0; i < parent.length; i++){
				let nodes = parent[i].childNodes;
				let price = parseInt(nodes[7].textContent.substring(7));
				let cant = nodes[5].childNodes[3];
					suma += parseInt(price) * parseInt(cant.textContent);
			  }	

			  if(parent.length >= 5){
				suma -= Math.round((30/100*suma));
			  }
			  
			  document.querySelector('.sub-total-price').innerHTML = `$${suma}`;
			  suma += parseInt(document.querySelector('.livrarea').textContent.substring(1,3));
			  document.querySelector('.pretul-final').innerHTML = `$${suma}`;
			});

			document.querySelector('.Checkout-Checkout').addEventListener('click',function(){
				if(document.querySelector('.produs-cart') !== null){
					console.log(document.querySelectorAll('.produs-cart'));
					localStorage.clear();
					alert('Mulțumim pentru cumpărături :)');
					location.reload();
				}
				else
					alert('Adăugați un produs în coș pentru al cumpăra :)');
			});
	}