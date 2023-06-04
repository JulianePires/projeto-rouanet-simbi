import {Box, Container} from '@mui/material'
import {styled} from 'styled-components'
import images from 'commons/constants/images'

export const HeaderContainer = styled(Container)`
  height: 6rem;
  padding: 0 1rem;
  display: flex !important;
  justify-content: center;
  align-items: center;
`

export const ShapeLeft = styled(Box).attrs({
  component: 'img',
  src: images.SHAPE.src,
  alt: images.SHAPE.alt,
})`
  width: auto;
  max-height: 6rem;
`

export const Logo = styled(Box).attrs({
  component: 'img',
  src: images.LOGO.src,
  alt: images.LOGO.alt,
})`
  width: auto;
  max-height: 4rem;
`

export const ShapeRight = styled(Box).attrs({
  component: 'img',
  src: images.SHAPE2.src,
  alt: images.LOGO.alt,
})`
  width: auto;
  max-height: 6rem;
`
