<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
          PhoneBook App
        </a>
        <div class="navbar-menu">
          <router-link class="navbar-item" to="/">Home</router-link>
          <router-link class="navbar-item" to="/about">About</router-link>
        </div>
        <button class="button navbar-burger">
        <span></span>
        <span></span>
        <span></span>
        </button>
    </div>
  </nav>
</template>

