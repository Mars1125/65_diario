var i, c, y, v, s, n;
  var im = new Array();
  var ti = new Array();
  v = document.getElementsByClassName("responsive-iframe");
  for (n = 0; n < v.length; n++) {
    im[n] = v[n].getAttribute("src");
    ti[n] = v[n].getAttribute("alt");
  }
  for (n = 0; n < v.length; n++) {
    y = v[n];
    i = document.createElement("img");
    i.setAttribute("src", im[n]);
    i.setAttribute("class", "thumb");
    c = document.createElement("span");
    c.setAttribute("class", "fa fa-play");
    s = document.createElement("p");
    s.setAttribute("class", "v_tt")
    t = document.createTextNode(ti[n]);
    y.appendChild(i);
    y.appendChild(c);
    y.appendChild(s);
    if (v[n].getAttribute("alt") !== null) { s.appendChild(t); }
    y.onclick = function() {
      var t = document.createElement("iframe");
      t.setAttribute("src", "https://www.youtube.com/embed/" + this.id + param(this));
      t.setAttribute("class", "responsive-iframe");
      t.setAttribute("allowfullscreen", "yes");
      this.parentNode.replaceChild(t, this);
    }
  };
  function param(x){
    if (x.getAttribute("data-params") !== null) {
      return x.getAttribute("data-params");
    } else {
      return "?autoplay=1&rel=0&controls=2";
    }
  }