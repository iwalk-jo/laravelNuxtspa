<template>
  <div>
    <!-- <index /> -->
    <b-container>

      <b-row>
        <b-col cols="*" sm="*" md="6" lg="6" class="mx-auto mt-5 offset-2">

          <b-card title="Log in">
            <b-form>

              <b-form-group>
                <label for="text-email">Email</label>
                <b-form-input type="email" v-model="form.email" aria-describedby="email-help-block"></b-form-input>
              </b-form-group>
              <b-form-group>
                <label for="text-password">Password</label>
                <b-form-input type="password" v-model="form.password"
                  aria-describedby="password-help-block"></b-form-input>
              </b-form-group>
              <b-form-group>
                <b-button type="submit" @click="login()" block variant="primary">Login</b-button>
              </b-form-group>
            </b-form>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  methods: {
    login() {
      this.$auth.loginWith('laravelSanctum', {
        data: {
          email: 'jo101014wizcon@gmail.com',
          password: 'password'
        }
      })
    }
  }
}

// export default {
//   middleware: ['guest'],
//   data() {
//     return {
//       form: {
//         email: '',
//         password: ''
//       }
//     };
//   },

//   methods: {
//     login() {
//       this.$auth.loginWith('laravelSanctum', {
//         data: this.form
//       })
//         .then(response => console.log('Login successful:', response))
//         .catch(error => console.log('Login error:', error));
//     }
//   }
// };
</script>