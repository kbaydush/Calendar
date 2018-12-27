<template>
  <b-nav-item-dropdown
    right
    no-caret>
    <template slot="button-content">
      <button
        class="navbar-toggler mobile-sidebar-toggler"
        type="button">
        <span class="navbar-toggler-icon"/>
      </button>
    </template>
    <b-dropdown-item>
      <b-nav-item :to="{name: 'Emails Settings'}" class="px-3">Mail settings</b-nav-item>
    </b-dropdown-item>
    <b-dropdown-item>
      <b-nav-item :to="{name: 'Modules Settings'}" class="px-3">Modules settings</b-nav-item>
    </b-dropdown-item>
    <b-dropdown-item>
      <b-nav-item :to="{name: 'Post'}" class="px-3">Post</b-nav-item>
    </b-dropdown-item>
    <!--<b-dropdown-item>-->
      <!--<i class="fa fa-envelope-o"/> Messages-->
      <!--<b-badge variant="success">{{ itemsCount }}</b-badge>-->
    <!--</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
      <!--<i class="fa fa-tasks"/> Tasks-->
      <!--<b-badge variant="danger">{{ itemsCount }}</b-badge>-->
    <!--</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
      <!--<i class="fa fa-comments"/> Comments-->
      <!--<b-badge variant="warning">{{ itemsCount }}</b-badge>-->
    <!--</b-dropdown-item>-->
    <!--<b-dropdown-header-->
      <!--tag="div"-->
      <!--class="text-center">-->
      <!--<strong>Settings</strong>-->
    <!--</b-dropdown-header>-->
    <!--<b-dropdown-item>-->
    <!--<i class="fa fa-user"/> Profile</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
    <!--<i class="fa fa-wrench"/> Settings</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
      <!--<i class="fa fa-usd"/> Payments-->
      <!--<b-badge variant="secondary">{{ itemsCount }}</b-badge>-->
    <!--</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
      <!--<i class="fa fa-file"/> Projects-->
      <!--<b-badge variant="primary">{{ itemsCount }}</b-badge>-->
    <!--</b-dropdown-item>-->
    <!--<b-dropdown-divider/>-->
    <!--<b-dropdown-item>-->
    <!--<i class="fa fa-shield"/> Lock Account</b-dropdown-item>-->
    <!--<b-dropdown-item>-->
    <!--<i class="fa fa-lock"/> Logout</b-dropdown-item>-->
  </b-nav-item-dropdown>
</template>
<script>
export default {
  name: 'HeaderDropdown',
  data: () => {
    return { itemsCount: 42 }
  },
}

</script>
