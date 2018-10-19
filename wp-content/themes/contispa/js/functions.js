
var ids=new Array('facial','corporal','medicina');
var els=new Array('ifacial','icorporal','imedicina');
var ids4=new Array('russa','endermo','ultrasom');
var els4=new Array('irussa','iendermo','iultrasom');
var ids5=new Array('higieni','lifting','drenFacial');
var els5=new Array('ihigieni','ilifting','idrenFacial');
var ids6=new Array('preenFacial','preenLabios','botox','rejuv','laser','intradermo','hidroli','carboxi','lipossomas','subcisao','bioplastia','peelings','eletroporacao');
var els6=new Array('ipreenFacial','ipreenLabios','ibotox','irejuv','ilaser','iintradermo','ihidroli','icarboxi','ilipossomas','isubcisao','ibioplastia','ipeelings','ieletroporacao');


function switchid(el,id){
	hideallids(els,ids);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid4(el,id){
	hideallids(els4,ids4);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid6(el,id){
	hideallids(els6,ids6);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid5(el,id){
	hideallids(els5,ids5);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function hideallids(el,id){
	for (var i=0;i<id.length;i++){
		hidediv(el[i],id[i]);
	}
}

function hidediv(el,id) {
	if (document.getElementById){
        //jQuery('#'+id).fadeOut('slow');
		document.getElementById(id).style.display = 'none';
        document.getElementById(el).className = '';
	}
	else{
		if (document.layers){
			document.id.display = 'none';
    }
		else
			document.all.id.style.display = 'none';


	}
}

function showdiv(id) {
	if (document.getElementById){
        jQuery('#'+id).fadeIn('slow');
		//document.getElementById(id).style.display = 'block';
	}
	else{
		if (document.layers)
             jQuery('#'+id).fadeIn('slow');
			//document.id.display = 'block';
		else
             jQuery('#'+id).fadeIn('slow');
			//document.all.id.style.display = 'block';
	}
}


var idsSpa=new Array('massagens','ofuro','oriental','dayspa');
var elsSpa=new Array('imassagens','iofuro','ioriental','idayspa');

var ids2=new Array('classica','shiatsu','bamboo','gestantes','ayur','drenagem','turbinada','esfoliante','hidratante','reflexo');
var ids3=new Array('vinho','floral','ervas','coco','saque','energiza','deuses','frutas','guarana');
var ids7=new Array('seitai','moxa','auriculo');
var ids8=new Array('day1','day2','day3');

var els2=new Array('iclassica','ishiatsu','ibamboo','igestantes','iayur','idrenagem','iturbinada','iesfoliante','ihidratante','ireflexo');
var els3=new Array('ivinho','ifloral','iervas','icoco','isaque','ienergiza','ideuses','ifrutas','iguarana');
var els7=new Array('iseitai','imoxa','iauriculo');
var els8=new Array('iday1','iday2','iday3');

function switchidSpa(el,id){
	hideallids(elsSpa,idsSpa);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid2(el,id){
	hideallids(els2,ids2);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid3(el,id){
	hideallids(els3,ids3);
	showdiv(id);
	document.getElementById(el).className = 'active';
}

function switchid7(el,id){
	hideallids(els7,ids7);
	showdiv(id);
	document.getElementById(el).className = 'active';
}


function switchid8(el,id){
	hideallids(els8,ids8);
	showdiv(id);
	document.getElementById(el).className = 'active';
}
