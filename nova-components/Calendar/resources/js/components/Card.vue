<template>
  <Card class="flex flex-col items-center justify-center w-full">
    <div class="px-3 py-3 w-full">
      <h1 class="text-center text-3xl text-gray-500 font-light">Calendario de Eventos</h1>
      <FullCalendar class="w-full" :options="calendarOptions" v-if="calendarOptions.events"/>
    </div>
  </Card>
</template>

<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'

export default {
  components: {
    FullCalendar
  },
  data() {
    return {
      calendarOptions: {
        plugins: [ dayGridPlugin, interactionPlugin ],
        initialView: 'dayGridMonth',
        dateClick: this.handleDateClick,
        events: []
      }
    }
  },
  methods: {
    handleDateClick: function(arg) {
      alert('date click! ' + arg.dateStr)
    },
    async getEvents(){
      const response = await fetch("http://findexapp.test/api/calendar-events");      
      const { events } = await response.json();
      console.log(events)
      this.calendarOptions.events = events
    }
  },
  mounted(){
    this.getEvents()
  }
}
</script>
