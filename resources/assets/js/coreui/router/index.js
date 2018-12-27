import Vue from 'vue'
import Router from 'vue-router'

// Containers
import Full from '@/containers/Full'

// Views
import Dashboard from '@/views/integr8tor/Dashboard'
import Post from '@/views/integr8tor/Post'
import Calendar from '@/views/integr8tor/Calendar'

// Views - Pages
import Page404 from '@/views/pages/Page404'
import Page500 from '@/views/pages/Page500'
import Login from '@/views/pages/Login'
import Register from '@/views/pages/Register'

//integr8tor
import EmailsSettings from '@/views/integr8tor/EmailsSettings'
import ModulesSettings from '@/views/integr8tor/ModulesSettings'
import Logs from '@/components/integr8tor/Logs'
import Settings from '@/components/integr8tor/Settings'
import Modules from '@/components/integr8tor/Modules'
import PrintersSettings from '@/components/integr8tor/PrintersSettings'

// Sample route
import sample from './sample'

Vue.use(Router)

export default new Router({
  mode           : 'history',
  linkActiveClass: 'open active',
  scrollBehavior : () => ({ y: 0 }),
  routes         : [
    {
      path     : '/',
      name     : 'Home',
      redirect : '/',
      component: Full,
      children : [
        {
          path     : '/',
          name     : 'Calendar',
          component: Calendar,
        },
        {
          path     : '/calendar',
          name     : 'Calendar',
          component: Calendar,
        },
        {
          path     : '/calendar/:id',
          name     : 'Calendar',
          component: Calendar,
          props: true
        },
        {
          name: 'Modules Settings',
          path: '/settings/modules',
          component: ModulesSettings
        },
        {
          name: 'Emails Settings',
          path: '/settings/emails',
          component: EmailsSettings
        },
        {
          path: '/modules/:name',
          name: 'Modules',
          component: Modules,
          children: [
            {path: 'logs', component: Logs},
          ],
        },
        {
          path: '/post',
          name: 'Post',
          component: Post
        },
      ],
    },
    {
      path     : '/pages',
      redirect : '/pages/404',
      name     : 'Pages',
      component: { render (c) { return c('router-view') } },
      children : [
        {
          path     : '404',
          name     : 'Page404',
          component: Page404,
        },
        {
          path     : '500',
          name     : 'Page500',
          component: Page500,
        },
        {
          path     : 'login',
          name     : 'Login',
          component: Login,
        },
        {
          path     : 'register',
          name     : 'Register',
          component: Register,
        },
      ],
    },
    {
      path     : '*',
      name     : '404',
      component: Page404,
    },
  ],
})
