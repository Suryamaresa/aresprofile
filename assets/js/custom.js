document.addEventListener('alpine:init', () => {
  Alpine.store('profile', {
    name: '',
    email: '',
    phone: '',
    address: '',
    headline: '',
    about: '',
    photo: '',
    social_media: {},
    init() {
      axios.get('/api/profile')
        .then(resp => {
          this.name = resp.data.name
          this.email = resp.data.email
          this.phone = resp.data.phone
          this.address = resp.data.address
          this.headline = resp.data.headline
          this.about = resp.data.about
          this.photo = resp.data.photo
          this.social_media = resp.data.social_media
        })
    }
  })

  Alpine.data('skills', () => ({
    skills: {},
    init() {
      axios.get('/api/skills')
        .then(resp => {
          this.skills = resp.data
        })
    }
  }))

  Alpine.data('experiences', () => ({
    experiences: {},
    init() {
      axios.get('/api/experiences')
        .then(resp => {
          this.experiences = resp.data
        })
    }
  }))

  Alpine.data('gallery', () => ({
    gallery: {},
    init() {
      axios.get('/api/gallery')
        .then(resp => {
          this.gallery = resp.data
        })
    }
  }))

  Alpine.data('contact', () => ({
    loading: false,
    error: false,
    success: false,
    message: '',
    form: {
      name: null,
      email: null,
      subject: null,
      message: null,
    },
    submit() {
      this.loading = true
      axios.post('/api/form', this.form)
    .then(resp => {
        this.success = true
        this.error = false
        this.message = resp.data.message
      })
        .catch(err => {
          this.success = false
          this.error = true
          this.message = err.message
        })
        .finally(() => {
          this.loading = false
        })
    }
  }))
})