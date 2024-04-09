<template>
  <div>
    <index />
    <b-container>
      <b-row>
        <b-col cols="*" sm="*" md="6" lg="6" class="mx-auto mt-5 offset-2">
          <b-card title="Sign up">
            <b-form>

              <b-form-group>
                <label for="text-name">First Name</label>
                <b-form-input type="text" v-model="form.first_name"></b-form-input>
              </b-form-group>

              <b-form-group>
                <label for="text-name">Last Name</label>
                <b-form-input type="text" v-model="form.last_name"></b-form-input>
              </b-form-group>

              <b-form-group>
                <label for="text-email">Email</label>
                <b-form-input type="email" v-model="form.email"></b-form-input>
              </b-form-group>

              <b-form-group>
                <label for="text-password">Password</label>
                <b-form-input type="password" v-model="form.password"></b-form-input>
              </b-form-group>

              <b-form-group>
                <b-button type="submit" @click.prevent="register()" block variant="primary">Register</b-button>
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
  middleware: ['guest'],
  data() {
    return {
      form: {
        first_name: '',
        last_name: '',
        email: '',
        password: '',
      }
    }
  },
  methods: {
    async register() {
      await this.$axios.post('/register', {
        data: this.form
      })
        .then(response => console.log('Registration successful:', response))
        .catch(error => console.error('Registration error:', error));
    }
  }
};
</script>
