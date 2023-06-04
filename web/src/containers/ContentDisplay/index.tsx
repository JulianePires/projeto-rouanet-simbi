import {Button, Container, Stack, Typography} from '@mui/material'
import {RouanetProjectType} from 'commons/utils/types'
import colors from 'commons/constants/colors'
import CardList from 'components/CardList'
import Carousel from 'components/Carousel'
import {memo, useState} from 'react'

const dataMock: RouanetProjectType[] = [
  {
    idProjeto: '29837',
    municipio: 'São Paulo',
    nome: 'Projeto Teste',
    resumo:
      "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ",
    uf: 'SP',
    valorAprovado: '2500.1',
    valorCaptado: '2200',
  },
  {
    idProjeto: '29838',
    municipio: 'São Paulo',
    nome: 'Projeto 2',
    resumo:
      "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ",
    uf: 'SP',
    valorAprovado: '2500.1',
    valorCaptado: '2200',
  },
  {
    idProjeto: '29839',
    municipio: 'São Paulo',
    nome: 'Projeto 3',
    resumo:
      "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ",
    uf: 'SP',
    valorAprovado: '2500.1',
    valorCaptado: '2200',
  },
  {
    idProjeto: '29832',
    municipio: 'São Paulo',
    nome: 'Projeto 4',
    resumo:
      "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ",
    uf: 'SP',
    valorAprovado: '2500.1',
    valorCaptado: '2200',
  },
]

const ContentDisplay: React.FC = () => {
  const [toggleCarousel, setToggleCarousel] = useState(false)

  function switchToggleCarousel() {
    setToggleCarousel(!toggleCarousel)
  }
  return (
    <Stack paddingX="2rem">
      <Typography
        variant="h6"
        sx={{margin: '2rem 0', color: colors.brandGreen}}>
        Ver outros projetos do Proponente
      </Typography>
      {toggleCarousel ? (
        <Carousel data={dataMock} />
      ) : (
        <CardList data={dataMock} />
      )}
      <Button
        sx={{
          width: 'fit-content',
          color: colors.lightGray,
          alignSelf: 'flex-end',
        }}
        onClick={switchToggleCarousel}>
        {toggleCarousel ? '+ Ver todos' : '- Ver Menos'}{' '}
      </Button>
    </Stack>
  )
}

export default memo(ContentDisplay)
