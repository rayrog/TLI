function drawChart() {
  // Define the chart to be drawn.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Element');
  data.addColumn('number', 'Percentage');
  data.addRows([
    ['Nitrogen', 0.78],
    ['Oxygen', 0.21],
    ['Other', 0.01]
  ]);

  // Instantiate and draw the chart.
  var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
  chart.draw(data, null);
  }
      
function googleFn(){
  google.charts.load('current', {packages: ['corechart']});
  google.charts.setOnLoadCallback(drawChart);
}

function date_heure(date_heure)
{
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth()+1;

        j = date.getDate();
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = 'Date: '+j+'/'+moi+'/'+annee+' heure: '+h+':'+m+':'+s;
        document.getElementById(date_heure).innerHTML = resultat;
        setTimeout('date_heure("'+date_heure+'");','1000');
        return true;
}