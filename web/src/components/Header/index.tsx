import {memo} from 'react'
import {HeaderContainer, Logo, ShapeLeft, ShapeRight} from './Header.styled'

const Header: React.FC = () => {
  return (
    <HeaderContainer>
      <ShapeLeft />
      <Logo />
      <ShapeRight />
    </HeaderContainer>
  )
}

export default memo(Header)
