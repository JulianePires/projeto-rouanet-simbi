import axios from 'axios'

const path = 'http://127.0.0.1:8000/api/V1'

const api = axios.create({
  baseURL: path,
  headers: {
    'Access-Control-Allow-Origin': '*',
    'Content-Type': 'application/json',
  },
})

export {api}
