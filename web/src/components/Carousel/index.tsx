import MaterialCarousel from 'react-material-ui-carousel'
import Card from 'components/Card'
import {memo} from 'react'
import {RouanetProjectType} from 'commons/utils/types'
import {formatAmount} from 'commons/utils/functions'

interface Props {
  data: RouanetProjectType[]
}

const Carousel: React.FC<Props> = ({data}) => {
    console.log(data)
  return (
    <MaterialCarousel autoPlay={false} navButtonsAlwaysVisible cycleNavigation>
      {data.map((project) => (
        <Card
          key={project.idProjeto}
          projectName={project.nome}
          city={project.municipio}
          state={project.uf}
          tag="Rouanet"
          summary={project.resumo}
          amountApproved={formatAmount(Number(project.valorAprovado))}
          amountRaised={formatAmount(Number(project.valorCaptado))}
        />
      ))}
    </MaterialCarousel>
  )
}

export default memo(Carousel)
