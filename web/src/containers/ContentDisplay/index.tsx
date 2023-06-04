import {Button, Pagination, Stack, Typography} from '@mui/material'
import colors from 'commons/constants/colors'
import CardList from 'components/CardList'
import Carousel from 'components/Carousel'
import useRouanetProject from 'hooks/useRouanetProjects'
import {memo, useLayoutEffect, useState} from 'react'

const ContentDisplay: React.FC = () => {
  const {pagination, handleChangePagination, handleSearchProjects, projects} =
    useRouanetProject()
  const [toggleCarousel, setToggleCarousel] = useState(false)

  function switchToggleCarousel() {
    setToggleCarousel(!toggleCarousel)
  }

  useLayoutEffect(() => {
    handleSearchProjects()
  }, [handleSearchProjects, pagination])

  return (
    <Stack paddingX="2rem">
      <Typography
        variant="h6"
        sx={{margin: '2rem 0', color: colors.brandGreen}}>
        Ver outros projetos do Proponente
      </Typography>
      {toggleCarousel ? (
        <Carousel
          data={projects.slice(pagination.startIndex, pagination.endIndex)}
        />
      ) : (
        <CardList
          data={projects.slice(pagination.startIndex, pagination.endIndex)}
        />
      )}
      <Button
        sx={{
          width: 'fit-content',
          color: colors.lightGray,
          alignSelf: 'center',
          margin: '1rem 0',
        }}
        onClick={switchToggleCarousel}>
        {toggleCarousel ? '+ Ver muitos' : '- Ver Menos'}{' '}
      </Button>
      <Pagination
        sx={{alignSelf: 'center'}}
        size="small"
        count={20}
        onChange={(_, page) => handleChangePagination(page)}
      />
    </Stack>
  )
}

export default memo(ContentDisplay)
