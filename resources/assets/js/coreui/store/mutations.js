// mutations are operations that actually mutates the state.
// each mutation handler gets the entire state tree as the
// first argument, followed by additional payload arguments.
// mutations must be synchronous and can be recorded by plugins
// for debugging purposes.
export default {
  setModules (state, paylod) {
    if (!Array.isArray(paylod)) {
      console.log('Only array can be assign to modules');

      return;
    }

    state.modules = paylod;
  },
  updateModule (state, paylod) {
    for (let i in context.state.modules) {
      // update only when it is necessary
      if (
        context.state.modules[i].id === paylod.id
        &&
        (
          context.state.favoriteLinks[i].friendlyName !== paylod.friendlyName
          || context.state.favoriteLinks[i].isEnabled !== paylod.enabled
        )
      ) {
        context.state.favoriteLinks[i].friendlyName = paylod.friendlyName;
        context.state.favoriteLinks[i].isEnabled = paylod.enabled;

        break;
      }
    }
  }
}
