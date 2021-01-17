var x;
x=$(document);
x.ready(funciona);

function funciona(){
	var r;
	var g;
	var h;
	var i;
	r=$("#cambia");
	r.click(Animate);
	g=$("#cambia1");
	g.click(Animate1);
	h=$("#cambia2");
	h.click(Animate2);
	i=$("#cambia3");
	i.click(Animate3);
}

function Animate(){
	var a;
	a=$("#cambia");
	a.css("background-color","rgba(204,51,51,0.5)");
	/*a.css("margin","10px 10px 10px 10px");*/
	a=$("#cambia1");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia2");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia3");
	a.css("background-color","rgba(204,51,51,0.0)");
}
function Animate1(){
	var a;
	a=$("#cambia1");
	a.css("background-color","rgba(204,51,51,0.5)");
	a=$("#cambia");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia2");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia3");
	a.css("background-color","rgba(204,51,51,0.0)");
}
function Animate2(){
	var a;
	a=$("#cambia2");
	a.css("background-color","rgba(204,51,51,0.5)");
	a=$("#cambia");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia1");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia3");
	a.css("background-color","rgba(204,51,51,0.0)");
}
function Animate3(){
	var a;
	a=$("#cambia3");
	a.css("background-color","rgba(204,51,51,0.5)");
	a=$("#cambia1");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia2");
	a.css("background-color","rgba(204,51,51,0.0)");
	a=$("#cambia");
	a.css("background-color","rgba(204,51,51,0.0)");
}