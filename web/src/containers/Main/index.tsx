import Header from 'components/Header'
import {memo} from 'react'
import {MainContainer} from './Main.styled'
import ContentDisplay from 'containers/ContentDisplay'

const Main: React.FC = () => {
  return (
    <MainContainer maxWidth="lg">
      <Header />
      <ContentDisplay />
    </MainContainer>
  )
}

export default memo(Main)
