!function(e){function t(e,t){return t*Math.floor(e/t)}function n(e,t,n,r){if("function"==typeof e.strftime)return e.strftime(t);var a=function(e,t){return e=""+e,t=""+(null==t?"0":t),1==e.length?t+e:e},i=[],o=!1,s=e.getHours(),u=s<12;null==n&&(n=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]),null==r&&(r=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]);var c;c=s>12?s-12:0==s?12:s;for(var m=0;m<t.length;++m){var l=t.charAt(m);if(o){switch(l){case"a":l=""+r[e.getDay()];break;case"b":l=""+n[e.getMonth()];break;case"d":l=a(e.getDate());break;case"e":l=a(e.getDate()," ");break;case"h":case"H":l=a(s);break;case"I":l=a(c);break;case"l":l=a(c," ");break;case"m":l=a(e.getMonth()+1);break;case"M":l=a(e.getMinutes());break;case"q":l=""+(Math.floor(e.getMonth()/3)+1);break;case"S":l=a(e.getSeconds());break;case"y":l=a(e.getFullYear()%100);break;case"Y":l=""+e.getFullYear();break;case"p":l=u?"am":"pm";break;case"P":l=u?"AM":"PM";break;case"w":l=""+e.getDay()}i.push(l),o=!1}else"%"==l?o=!0:i.push(l)}return i.join("")}function r(e){function t(e,t,n,r){e[t]=function(){return n[r].apply(n,arguments)}}var n={date:e};void 0!=e.strftime&&t(n,"strftime",e,"strftime"),t(n,"getTime",e,"getTime"),t(n,"setTime",e,"setTime");for(var r=["Date","Day","FullYear","Hours","Milliseconds","Minutes","Month","Seconds"],a=0;a<r.length;a++)t(n,"get"+r[a],e,"getUTC"+r[a]),t(n,"set"+r[a],e,"setUTC"+r[a]);return n}function a(e,t){if("browser"==t.timezone)return new Date(e);if(t.timezone&&"utc"!=t.timezone){if("undefined"!=typeof timezoneJS&&void 0!==timezoneJS.Date){var n=new timezoneJS.Date;return n.setTimezone(t.timezone),n.setTime(e),n}return r(new Date(e))}return r(new Date(e))}var i={xaxis:{timezone:null,timeformat:null,twelveHourClock:!1,monthNames:null}},o={second:1e3,minute:6e4,hour:36e5,day:864e5,month:2592e6,quarter:7776e6,year:525949.2*60*1e3},s=[[1,"second"],[2,"second"],[5,"second"],[10,"second"],[30,"second"],[1,"minute"],[2,"minute"],[5,"minute"],[10,"minute"],[30,"minute"],[1,"hour"],[2,"hour"],[4,"hour"],[8,"hour"],[12,"hour"],[1,"day"],[2,"day"],[3,"day"],[.25,"month"],[.5,"month"],[1,"month"],[2,"month"]],u=s.concat([[3,"month"],[6,"month"],[1,"year"]]),c=s.concat([[1,"quarter"],[2,"quarter"],[1,"year"]]);e.plot.plugins.push({init:function(r){r.hooks.processOptions.push(function(r,i){e.each(r.getAxes(),function(e,r){var i=r.options;"time"==i.mode&&(r.tickGenerator=function(e){var n=[],r=a(e.min,i),s=0,m=i.tickSize&&"quarter"===i.tickSize[1]||i.minTickSize&&"quarter"===i.minTickSize[1]?c:u;null!=i.minTickSize&&(s="number"==typeof i.tickSize?i.tickSize:i.minTickSize[0]*o[i.minTickSize[1]]);for(var l=0;l<m.length-1&&!(e.delta<(m[l][0]*o[m[l][1]]+m[l+1][0]*o[m[l+1][1]])/2&&m[l][0]*o[m[l][1]]>=s);++l);var h=m[l][0],f=m[l][1];if("year"==f){if(null!=i.minTickSize&&"year"==i.minTickSize[1])h=Math.floor(i.minTickSize[0]);else{var k=Math.pow(10,Math.floor(Math.log(e.delta/o.year)/Math.LN10)),M=e.delta/o.year/k;h=M<1.5?1:M<3?2:M<7.5?5:10,h*=k}h<1&&(h=1)}e.tickSize=i.tickSize||[h,f];var d=e.tickSize[0];f=e.tickSize[1];var g=d*o[f];"second"==f?r.setSeconds(t(r.getSeconds(),d)):"minute"==f?r.setMinutes(t(r.getMinutes(),d)):"hour"==f?r.setHours(t(r.getHours(),d)):"month"==f?r.setMonth(t(r.getMonth(),d)):"quarter"==f?r.setMonth(3*t(r.getMonth()/3,d)):"year"==f&&r.setFullYear(t(r.getFullYear(),d)),r.setMilliseconds(0),g>=o.minute&&r.setSeconds(0),g>=o.hour&&r.setMinutes(0),g>=o.day&&r.setHours(0),g>=4*o.day&&r.setDate(1),g>=2*o.month&&r.setMonth(t(r.getMonth(),3)),g>=2*o.quarter&&r.setMonth(t(r.getMonth(),6)),g>=o.year&&r.setMonth(0);var S,y=0,z=Number.NaN;do{if(S=z,z=r.getTime(),n.push(z),"month"==f||"quarter"==f)if(d<1){r.setDate(1);var p=r.getTime();r.setMonth(r.getMonth()+("quarter"==f?3:1));var v=r.getTime();r.setTime(z+y*o.hour+(v-p)*d),y=r.getHours(),r.setHours(0)}else r.setMonth(r.getMonth()+d*("quarter"==f?3:1));else"year"==f?r.setFullYear(r.getFullYear()+d):r.setTime(z+g)}while(z<e.max&&z!=S);return n},r.tickFormatter=function(e,t){var r=a(e,t.options);if(null!=i.timeformat)return n(r,i.timeformat,i.monthNames,i.dayNames);var s=t.options.tickSize&&"quarter"==t.options.tickSize[1]||t.options.minTickSize&&"quarter"==t.options.minTickSize[1],u=t.tickSize[0]*o[t.tickSize[1]],c=t.max-t.min,m=i.twelveHourClock?" %p":"",l=i.twelveHourClock?"%I":"%H";return n(r,u<o.minute?l+":%M:%S"+m:u<o.day?c<2*o.day?l+":%M"+m:"%b %d "+l+":%M"+m:u<o.month?"%b %d":s&&u<o.quarter||!s&&u<o.year?c<o.year?"%b":"%b %Y":s&&u<o.year?c<o.year?"Q%q":"Q%q %Y":"%Y",i.monthNames,i.dayNames)})})})},options:i,name:"time",version:"1.0"}),e.plot.formatDate=n,e.plot.dateGenerator=a}(jQuery);