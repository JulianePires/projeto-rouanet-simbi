import {formatAmount} from 'commons/utils/functions'
import {RouanetProjectType} from 'commons/utils/types'
import Card from 'components/Card'
import {memo} from 'react'
import {CardListContainer} from './CardList.styled'

interface Props {
  data: RouanetProjectType[]
}

const CardList: React.FC<Props> = ({data}) => {
  return (
    <CardListContainer>
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
    </CardListContainer>
  )
}

export default memo(CardList)
