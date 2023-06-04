import {StylesProvider} from '@material-ui/styles'
import {CssBaseline} from '@material-ui/core'
import GlobalStyle from 'commons/styles/globalStyle'
import Main from 'containers/Main'
import {ThemeProvider} from '@mui/material'
import theme from 'commons/styles/muiTheme'

function App() {
  return (
    <ThemeProvider theme={theme}>
      <StylesProvider injectFirst>
        <CssBaseline />
        <GlobalStyle />
        <Main />
      </StylesProvider>
    </ThemeProvider>
  )
}

export default App
