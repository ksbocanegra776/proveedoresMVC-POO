
var modalCalendar = new bootstrap.Modal(document.getElementById('modalCalendar'))
let frm = document.getElementById('formCalendar');
let baseUrl='http://proveedoresdp/?c=';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        locale: "es",
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',


        },
        events:baseUrl+'CalendarController&a=listEvent',
        dateClick: function(info){
           console.log(info)
           frm.reset();
           document.getElementById('id_evento').value='';
           document.getElementById('eliminar').classList.add('d-none');
           document.getElementById('dateEvent').value=info.dateStr;
           document.getElementById('btnSave').textContent='Crear';
           document.getElementById('titulo').textContent='Registro de evento';
           modalCalendar.show();
        },
        eventClick: function (info){
            console.log(info);
            document.getElementById('eliminar').classList.remove('d-none');
            document.getElementById('titulo').textContent='Modificación de evento';
            document.getElementById('btnSave').textContent='Modificar';
            document.getElementById('id_evento').value=info.el.fcSeg.eventRange.def.extendedProps.id_agendamiento;
            document.getElementById('codEvent').value=info.el.fcSeg.eventRange.def.extendedProps.cod_agendamiento;
            document.getElementById('eventMot').value=info.el.fcSeg.eventRange.def.extendedProps.motivo_agendamiento;
            document.getElementById('proveedorCod').value=info.el.fcSeg.eventRange.def.extendedProps.proveedor_agendado;
            document.getElementById('dateEvent').value=info.el.fcSeg.eventRange.def.extendedProps[2];
            document.getElementById('statusEvent').value=info.el.fcSeg.eventRange.def.extendedProps.cod_estado;
            document.getElementById('colorPriority').value=info.el.fcSeg.eventRange.def.ui.backgroundColor;

            modalCalendar.show();  
        }       

    });
  
    calendar.render();
    
    frm.addEventListener('submit',function(e){
        e.preventDefault();
          
        const color=document.getElementById('colorPriority');
        const codEvent=document.getElementById('codEvent').value;
        const eventMot=document.getElementById('eventMot');
        const proveedorCod=document.getElementById('proveedorCod');
        const date=document.getElementById('dateEvent');
        const eventStatus=document.getElementById('statusEvent');
        
        
        if(codEvent=="" || date=="" ||color==""||color=='#000000'||proveedorCod==""||proveedorCod=='N/A' ||eventStatus==""||eventStatus=='N/A' || eventMot==""||eventMot=='N/A'){
            Swal.fire(
            'Alerta',
            'Todos los campos deben ser diligenciados',
            'warning'
        )}else{
            const cont='CalendarController&a=register';
            
            url=baseUrl+cont;
            const http= new XMLHttpRequest();
            http.open('POST',url,true);
            http.send(new FormData(frm));
            http.onreadystatechange= function(){
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    const rta = JSON.parse(this.responseText);
                    console.log(rta);
                    if (rta.status) {   
                    }
                    
                    Swal.fire(
                        'AVISO',
                        rta.info,
                        rta.type,
                    )
                   /*  modalCalendar.hide(); */
           
                }
            }
        }
    })
});