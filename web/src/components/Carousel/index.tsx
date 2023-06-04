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
    <MaterialCarousel autoPlay={false} cycleNavigation>
      {data.map((project) => (
        <Card
          key={project.id_projeto}
          projectName={project.nome}
          city={project.municipio}
          state={project.uf}
          tag="Rouanet"
          summary={project.resumo}
          amountApproved={formatAmount(Number(project.valor_aprovado))}
          amountRaised={formatAmount(Number(project.valor_captado))}
        />
      ))}
    </MaterialCarousel>
  )
}

export default memo(Carousel)
