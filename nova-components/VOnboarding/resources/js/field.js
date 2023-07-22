import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-v-onboarding', IndexField)
  app.component('detail-v-onboarding', DetailField)
  app.component('form-v-onboarding', FormField)
})
